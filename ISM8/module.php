<?php
// include autoloader
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/libs/helpers/autoload.php');

// define guids
if (!defined('ISM_SOCKET_RX')) {
    define('ISM_SOCKET_RX', '{8062CF2B-600E-41D6-AD4B-1BA66C32D6ED}');
}

if (!defined('ISM_SOCKET_TX')) {
    define('ISM_SOCKET_TX', '{79827379-F36E-4ADA-8A95-5F8D1DC92FA9}');
}

if (!defined('ISM_DEVICE')) {
    define('ISM_DEVICE', '{D798AEDC-ADB0-4275-8E74-D6C226ADEF4E}');
}

/**
 * Class ISM8
 * IP-Symcon Wolf ISM8 module
 *
 * @version     1.1
 * @category    Symcon
 * @package     de.codeking.symcon.ism8
 * @author      Frank Herrmann <frank@codeking.de>
 * @link        https://codeking.de
 * @link        https://github.com/CodeKing/de.codeking.symcon.ism8
 *
 */
class ISM8 extends Module
{
    use InstanceHelper,
        WolfHelper;

    private $port;
    private $category_id;

    /**
     * create instance
     */
    public function Create()
    {
        parent::Create();

        // register public properties
        $this->RegisterPropertyInteger('port', 12004);
        $this->RegisterPropertyInteger('category_id', 0);
    }

    /**
     * delete instance
     * @return bool|void
     */
    public function Destroy()
    {
        // delete parent socket
        $this->DestroyInstanceByModuleAndIdent(ISM_SOCKET_RX, 'ISM8_Socket_' . $this->InstanceID);

        parent::Destroy();
    }

    /**
     * execute, when kernel is ready or on ApplyChanges()
     */
    protected function onKernelReady()
    {
        // connect parent i/o device
        if (!$this->HasActiveParent()) {
            $this->RequireParent(ISM_SOCKET_RX);
        }

        // register parent socket
        $this->RegisterParentSocket();

        // set active
        $this->SetStatus(102);
    }

    /**
     * Register parent client socket
     */
    public function RegisterParentSocket()
    {
        // read config
        $this->ReadConfig();

        // register & configure parent socket
        $ParentID = $this->RegisterParent();
        if ($ParentID > 0) {
            IPS_SetName($ParentID, 'ISM8 Server Socket');
            IPS_SetIdent($ParentID, 'ISM8_Socket_' . $this->InstanceID);
            IPS_SetProperty($ParentID, 'Port', $this->port);
            IPS_SetProperty($ParentID, 'Open', true);

            if (IPS_HasChanges($ParentID)) {
                IPS_ApplyChanges($ParentID);
            }
        }
    }

    /**
     * Read config
     */
    private function ReadConfig()
    {
        // get settings
        $this->port = $this->ReadPropertyInteger('port');
        $this->category_id = $this->ReadPropertyInteger('category_id');
    }

    /**
     * Receive data from parent
     * @param $JSONString
     * @return bool|void
     */
    public function ReceiveData($JSONString)
    {
        // read config
        $this->ReadConfig();

        // extract buffer data
        $data = json_decode($JSONString);

        // convert hex data to array
        $hexData = $this->HexToArray(utf8_decode($data->Buffer));

        // send acknowledgment of receipt
        $this->SendAck($hexData);

        // read telegram
        $telegramData = $this->Read($hexData);

        // log telegram data
        $this->_log('Wolf Data', json_encode($telegramData));

        // loop telegram data & save values
        foreach ($telegramData AS $data) {
            // create instance by device type
            $instance_id = $this->CreateInstanceByIdentifier(ISM_DEVICE, $this->category_id, $data['device'], $data['device']);

            // build identifier by datapoint id & type
            $identifier = $data['id'] . '_' . $data['type'] . ($data['in'] ? '_action' : '');

            // create variable or update value
            $this->CreateVariableByIdentifier([
                'parent_id' => $instance_id,
                'name' => $data['name'],
                'value' => $data['value'],
                'identifier' => $identifier,
                'position' => $data['id'],
                'custom_profile' => $this->getProfile($data['type'], $data['unit'])
            ]);
        }
    }

    /**
     * Forward data from children to i/o device
     * @param $JSONString
     * @return string|void
     */
    public function ForwardData($JSONString)
    {
        $data = json_decode($JSONString, true);
        $data['DataID'] = ISM_SOCKET_TX;
        $this->SendDataToParent(json_encode($data));
    }

    /**
     * Read & update data
     */
    public function GetData()
    {
        // request data from ISM8
        $this->RequestData();
    }

    public function Test()
    {
        $value = $this->DPT_Value_Temp(-30, true);

        var_dump($value);
        exit;
    }

    /***********************************************************
     * Configuration Form
     ***********************************************************/
    /**
     * set configuration for parent
     * @return string
     */
    public function GetConfigurationForParent()
    {
        // read config
        $this->ReadConfig();

        // return config
        return json_encode([
            'Port' => $this->port,
            'Open' => true
        ]);
    }
}