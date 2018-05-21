<?php

trait WolfHelper
{
    /**
     * Request all data from ISM8
     */
    public function RequestData()
    {
        $this->SendDataToParent(json_encode([
            'DataID' => ISM_SOCKET_TX,
            'Buffer' => utf8_encode(pack('H*', '0620F080001604000000F0D0'))
        ]));

        return;
    }

    /**
     * read hex data
     * @param string $hexData
     * @return array
     *
     * @uses DPT_Scaling
     * @uses DPT_Value_Temp
     * @uses DPT_Value_Tempd
     * @uses DPT_Value_Pres
     * @uses DPT_Power
     * @uses DPT_Value_Volume_Flow
     * @uses DPT_Bool
     * @uses DPT_Enable
     * @uses DPT_Switch
     * @uses DPT_OpenClose
     * @uses DPT_FlowRate
     * @uses DPT_ActiveEnergy
     * @uses DPT_ActiveEnergy_kWh
     * @uses DPT_Date
     * @uses DPT_TimeOfDay
     */
    public function Read($hexData = '')
    {
        // concat main- & subservice
        $service = $hexData[10] . $hexData[11];

        // get number of datapoints
        $datapoints = hexdec($hexData[14] . ' ' . $hexData[15]);
        $current_position = 0;

        $data = [];
        // proceed, if service requests is 'SetDatapointValue'
        if ($service == 'F006') {
            // loop data and append values
            for ($i = 1; $i <= $datapoints; $i++) {
                // get datapoint id
                $datapoint_id = hexdec($hexData[$current_position + 16] . $hexData[$current_position + 17]);

                // if datapoint is defined, proceed!
                // get datapoint by id
                if ($datapoint = WolfProfiles::getDatapoint($datapoint_id)) {
                    // get datapoint length
                    $length = hexdec($hexData[$current_position + 19]);

                    // concat value by datapoint length
                    $value = '0';
                    for ($n = 0; $n <= $length - 1; $n++) {
                        $value .= $hexData[$current_position + 20 + $n];
                    }

                    // get value
                    $value = hexdec($value);

                    // convert value
                    if (method_exists(__CLASS__, $datapoint['type'])) {
                        $value = call_user_func_array([__CLASS__, $datapoint['type']], [$value]);
                    }

                    // append data
                    $data[] = [
                        'id' => $datapoint_id,
                        'device' => $datapoint['device'],
                        'name' => $datapoint['datapoint'],
                        'type' => $datapoint['type'],
                        'value' => $value,
                        'rw' => $datapoint['rw'],
                        'unit' => $datapoint['unit']
                    ];
                }

                // extend current datapoint position
                $current_position += 4 + $length;
            }
        }

        return $data;
    }

    /**
     * write telegram
     * @param int $datapoint_id
     * @param mixed $value
     */
    public function Write($datapoint_id = null, $value = 0)
    {
        // get datapoint
        if ($datapoint = WolfProfiles::getDatapoint($datapoint_id)) {
            // convert value
            if (method_exists(__CLASS__, $datapoint['type'])) {
                $value = call_user_func_array([__CLASS__, $datapoint['type']], [$value, true]);
            }

            var_dump($value);

            if ($value !== false) {
                $header = '0620F080';
                $frame_size = 20; // 0014
                $connect_header = '04000000F0';

                $object_server = 'C1' // subservice code
                    . $this->_dechex($datapoint_id, 4) // start datapoint
                    . $this->_dechex(1, 4) // number of datapoints
                    . $this->_dechex($datapoint_id, 4) // first datapoint id
                    . '00'      // first datapoint state
                    . $this->_dechex(strlen($value) / 2, 2) // first datapoint length
                    . $value;

                $frame_size += strlen($value);
                $frame_size = $this->_dechex($frame_size, 4);

                $hex = $header . $frame_size . $connect_header . $object_server;
                $buffer = pack('H*', $hex);

                $this->SendDataToParent(json_encode([
                    'DataID' => ISM_SPLITTER_RX,
                    'Buffer' => utf8_encode($buffer)
                ]));
            }
        }
    }

    /**
     * send acknowledgment of receipt
     * @param string $data
     * @return bool
     */
    function SendAck($data = null)
    {
        // concat main- & subservice
        $service = $data[10] . $data[11];

        // send acknowledgment, if service requests is 'SetDatapointValue' (F0 06)
        if ($service == 'F006') {
            // extract data
            $header = $data[0] . $data[1] . $data[2] . $data[3];
            $frame_size = "0011";
            $connect_header = $data[6] . $data[7] . $data[8] . $data[9];
            $object_server = $data[10] . '86' . $data[12] . $data[13] . '000000';

            // build acknowledgment
            $ACK = pack('H*', $header . $frame_size . $connect_header . $object_server);

            // send acknowledgment
            $this->SendDataToParent(json_encode([
                'DataID' => ISM_SOCKET_TX,
                'Buffer' => utf8_encode($ACK)
            ]));

            return true;
        }

        return false;
    }

    /**
     * convert hex data to array
     * @param string $hexData
     * @return array
     */
    private function HexToArray($hexData = null)
    {
        $hexData = unpack('H*', $hexData);
        return explode(' ', (wordwrap((strtoupper($hexData[1])), 2, ' ', true)));
    }

    /**
     * PDT_Scaling: converts value to percentage
     * @param string $value
     * @param bool $encode
     * @return float
     */
    private function DPT_Scaling($value = null, $encode = false)
    {
        return (float)round(($value & 0xff) * 100 / 255, 3);
    }

    /**
     * PDT_HVACMode
     * @param string $value
     * @param bool $encode
     * @return int|string
     */
    private function DPT_HVACMode($value = '0', $encode = false)
    {
        if ($encode) {
            return $this->_dechex($value);
        } else {
            return (int)$value;
        }
    }

    private function DPT_DHWMode($value = '0', $encode = false)
    {
        return $this->DPT_HVACMode($value, $encode);
    }

    /**
     * PDT_KNX_FLOAT: converts value from / to float by exponent and mantissa
     * @param string $value
     * @param bool $encode
     * @return float|string
     */
    private function DPT_KNX_FLOAT($value = null, $encode = false)
    {
        // @todo: get resolution by datapoint config
        $resolution = 0.01;

        if ($encode) {
            $val = $value / $resolution;
            $exponent = 0;

            while (!($val <= 2047 && $val >= -2048)) {
                $val = $val / 2;
                $exponent++;
            }

            // on negative value, build complement
            if ($value < 0) {
                $bin = $this->_decbin(-1 * $val, 11);
                $bin = $this->_reversebit($bin);
                $bin = decbin(bindec($bin) + 1);
                $sign = 1;
            } else {
                $bin = $this->_decbin($val, 11);
                $sign = 0;
            }

            $exponent = $this->_decbin($exponent, 4);
            return dechex(bindec($sign . $exponent . $bin));
        } else {
            $sign = ($value & 0x8000) >> 15; //0x8000 = 1000 0000 0000 0000 dieses Bit ist das Vorzeichen (-)
            $exponent = ($value & 0x7800) >> 11; // 0x7800 = *0111 1000 0000 0000‬ diese bits sind für den exponeten.
            $mantissa = $value & 0x07ff; // 0x07ff = *0000 0111 1111 1111 diese Bits stellen die Range dar‬

            if ($sign != 0) {
                $mantissa = -(~($mantissa - 1) & 0x07ff);
            }

            $value = (1 << $exponent) * $resolution * $mantissa;

            return (float)$value;
        }
    }

    /**
     * DPT_KNX_FLOAT aliases
     */
    private function DPT_Value_Temp($value = null, $encode = false)
    {
        return $this->DPT_KNX_FLOAT($value, $encode);
    }

    private function DPT_Value_Tempd($value = null, $encode = false)
    {
        return $this->DPT_KNX_FLOAT($value, $encode);
    }

    private function DPT_Value_Pres($value = null, $encode = false)
    {
        return $this->DPT_KNX_FLOAT($value, $encode);
    }

    private function DPT_Power($value = null, $encode = false)
    {
        return $this->DPT_KNX_FLOAT($value, $encode);
    }

    private function DPT_Value_Volume_Flow($value = null, $encode = false)
    {
        return $this->DPT_KNX_FLOAT($value, $encode);
    }

    /**
     * DPT_Bool: convert from / to boolean
     * @param string $value
     * @param bool $encode
     * @return bool|array
     */
    private function DPT_Bool($value = '0', $encode = false)
    {
        if ($encode) {
            return $this->_dechex((int)$value);
        } else {
            return (bool)$value;
        }
    }

    /**
     * DPT_Switch: convert to boolean
     * @param string $value
     * @param bool $encode
     * @return bool
     */
    private function DPT_Switch($value = '0', $encode = false)
    {
        return $this->DPT_Bool($value, $encode);
    }

    /**
     * DPT_Enable: convert to boolean
     * @param string $value
     * @param bool $encode
     * @return bool
     */
    private function DPT_Enable($value = '0', $encode = false)
    {
        return $this->DPT_Bool($value, $encode);
    }

    /**
     * DPT_OpenClose: convert to boolean
     * @param string $value
     * @param bool $encode
     * @return bool
     */
    private function DPT_OpenClose($value = '0', $encode = false)
    {
        return $this->DPT_Bool($value, $encode);
    }

    /**
     * DPT_FlowRate: convert hex to flow rate
     * @param string $value
     * @param bool $encode
     * @return float
     */
    private function DPT_FlowRate($value = null, $encode = false)
    {
        $value = ($value[0] << 24) | ($value[1] << 16) | ($value[2] << 8) | ($value[3] << 0);
        $flowrate = $value * 0.0001;
        return (float)$flowrate;
    }

    /**
     * DPT_ActiveEnergy: converts value to actice energy
     * @hint: currently unused!
     * @param string $value
     * @param bool $encode
     * @return float
     */
    private function DPT_ActiveEnergy($value = null, $encode = false)
    {
        return (float)$value;
    }

    /**
     * DPT_ActiveEnergy: converts value to actice energy kWh
     * @hint: currently unused!
     * @param string $value
     * @param bool $encode
     * @return float
     */
    private function DPT_ActiveEnergy_kWh($value = null, $encode = false)
    {
        return (float)$value;
    }

    /**
     * PDT_Date: converts value to date (DD.MM.YYYY)
     * @param string $value
     * @param bool $encode
     * @return string
     */
    private function DPT_Date($value = null, $encode = false)
    {
        $b1 = ($value & 0xff0000) >> 16;
        $b2 = ($value & 0x00ff00) >> 8;
        $b3 = ($value & 0x0000ff);
        $day = $b1 & 0x1f;
        $mon = $b2 & 0xf;
        $year = $b3 & 0x7f;

        if ($year < 90) {
            $year += 2000;
        } else {
            $year += 1900;
        }

        return (string)sprintf("%02d.%02d.%04d", $day, $mon, $year);
    }

    /**
     * DPT_TimeOfDay: converts value to time of the day
     * @param string $value
     * @param bool $encode
     * @return string
     */
    private function DPT_TimeOfDay($value = null, $encode = false)
    {
        $daynames = [
            '(no_day_provided)',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ];

        $day = ($value[0] & 0xE0) >> 5;
        $hour = $value[0] & 0x1F;
        $minutes = $value[1] & 0x3F;
        $seconds = $value[2] & 0x3F;

        $hour = sprintf("%02d", $hour);
        $minutes = sprintf("%02d", $minutes);
        $seconds = sprintf("%02d", $seconds);

        if ($day == 0)
            return ((string)$hour) . ":" . ((string)$minutes) . ":" . ((string)$seconds);
        else
            return $daynames[$day] . "," . ((string)$hour) . ":" . ((string)$minutes) . ":" . ((string)$seconds);
    }

    /**
     * helper methods
     * @param $BIT
     * @return string
     */
    private function _reversebit($bit)
    {
        return strtr($bit, [1, 0]);
    }

    private function _decbin($value, $bit_length = 16)
    {
        return str_pad(decbin($value), $bit_length, '0', STR_PAD_LEFT);
    }

    private function _dechex($value, $bit_length = 2)
    {
        return strtoupper(str_pad(dechex($value), $bit_length, '0', STR_PAD_LEFT));
    }

    private function _long($HEX)
    {
        return ($HEX > 2147483647 and $HEX - 2147483648 or $HEX);
    }
}