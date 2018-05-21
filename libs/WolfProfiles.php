<?php

class WolfProfiles
{

    private static $profiles = [
        'DPT_Switch' => [
            'values' => [
                true => 'on',
                false => 'off'
            ],
            'icon' => 'Information'
        ],
        'DPT_Bool' => [
            'values' => [
                true => 'yes',
                false => 'no'
            ]
        ],
        'DPT_Enable' => [
            'values' => [
                true => 'enabled',
                false => 'disabled'
            ]
        ],
        'DPT_OpenClose' => [
            'values' => [
                true => 'closed',
                false => 'opened'
            ],
            'icon' => 'Information'
        ],
        'DPT_HVACMode' => [
            'values' => [
                0 => 'Auto',
                1 => 'Comfort',
                2 => 'Standby',
                3 => 'Economy',
                4 => 'Building Protection'
            ]
        ],
        'DPT_DHWMode' => [
            'values' => [
                0 => 'Auto',
                1 => 'LegioProtect',
                2 => 'Normal',
                3 => 'Reduced',
                4 => 'Off / Frost / Protect'
            ]
        ],
        'DPT_HVACContrMode' => [
            'values' => [
                0 => 'Auto',
                1 => 'Heat',
                2 => 'Morning Warmup',
                3 => 'Cool',
                4 => 'Night Purge',
                5 => 'Precool',
                6 => 'Off',
                7 => 'Test',
                8 => 'Emergency Heat',
                9 => 'Fan Only',
                10 => 'Free Cool',
                11 => 'Ice',
                12 => 'Maximum Heating Mode',
                13 => 'Economic Heat/Cool Mode',
                14 => 'Dehumidifiation',
                15 => 'Calibration Mode',
                16 => 'Emergency Cool Mode',
                17 => 'Emergency Steam Mode',
                20 => 'NoDem'
            ]
        ],
        'DPT_Value_Temp' => [
            'steps' => 1,
            'min' => -273,
            'max' => 760,
            'icon' => 'Temperature'
        ],
        'DPT_Value_Tempd' => [
            'steps' => 1,
            'min' => -670,
            'max' => 670,
            'icon' => 'Temperature'
        ],
        'DPT_Value_Pres' => [
            'steps' => 1,
            'min' => 0,
            'max' => 670
        ],
        'DPT_Power' => [
            'steps' => 1,
            'min' => -670,
            'max' => 670,
            'icon' => 'Electricity'
        ]
    ];

    private static $devices = [
        'hg1' => 'Heizgerät 1',
        'hg2' => 'Heizgerät 2',
        'hg3' => 'Heizgerät 3',
        'hg4' => 'Heizgerät 4',
        'bm1' => 'Bedienmodul 1',
        'bm2' => 'Bedienmodul 2',
        'bm3' => 'Bedienmodul 3',
        'bm4' => 'Bedienmodul 4',
        'km1' => 'Kaskadenmodul',
        'mm1' => 'Mischermodul 1',
        'mm2' => 'Mischermodul 2',
        'mm3' => 'Mischermodul 3',
        'sm1' => 'Solarmodul',
        'cw1' => 'CWL Excellent',
        'hg0' => 'Wärmepumpe'
    ];

    private static $datapoints = [
        'hg1' => [

        ],
        1 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false,
        ],
        2 => [
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        3 => [
            'datapoint' => 'Modulationsgrad / Brennerleistung',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        4 => [
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        5 => [
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        6 => [
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        7 => [
            'datapoint' => 'Warmwassertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        8 => [
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        9 => [
            'datapoint' => 'Status Brenner / Flamme',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        10 => [
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        11 => [
            'datapoint' => 'Status Speicherladepumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        12 => [
            'datapoint' => 'Status 3-Wege-Umschaltventil',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        13 => [
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        14 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        15 => [
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        16 => [
            'datapoint' => 'Modulationsgrad / Brennerleistung',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        17 => [
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        18 => [
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        19 => [
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        20 => [
            'datapoint' => 'Warmwassertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        21 => [
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        22 => [
            'datapoint' => 'Status Brenner / Flamme',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        23 => [
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        24 => [
            'datapoint' => 'Status Speicherladepumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        25 => [
            'datapoint' => 'Status 3-Wege-Umschaltventil',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        26 => [
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        27 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        28 => [
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        29 => [
            'datapoint' => 'Modulationsgrad / Brennerleistung',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        30 => [
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        31 => [
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        32 => [
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        33 => [
            'datapoint' => 'Warmwassertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        34 => [
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        35 => [
            'datapoint' => 'Status Brenner / Flamme',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        36 => [
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        37 => [
            'datapoint' => 'Status Speicherladepumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        38 => [
            'datapoint' => 'Status 3-Wege-Umschaltventil',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        39 => [
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        40 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        41 => [
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        42 => [
            'datapoint' => 'Modulationsgrad / Brennerleistung',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        43 => [
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        44 => [
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        45 => [
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        46 => [
            'datapoint' => 'Warmwassertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        47 => [
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        48 => [
            'datapoint' => 'Status Brenner / Flamme',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        49 => [
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        50 => [
            'datapoint' => 'Status Speicherladepumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        51 => [
            'datapoint' => 'Status 3-Wege-Umschaltventil',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        52 => [
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        53 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        54 => [
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        55 => [
            'datapoint' => 'Raumtemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        56 => [
            'datapoint' => 'Warmwassersolltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        57 => [
            'datapoint' => 'Programmwahl Heizkreis',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        58 => [
            'datapoint' => 'Programmwahl Warmwasser',
            'type' => 'DPT_DHWMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        59 => [
            'datapoint' => 'Heizkreis Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        60 => [
            'datapoint' => 'Heizkreis Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        61 => [
            'datapoint' => 'Heizkreis Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        62 => [
            'datapoint' => 'Warmwasser Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        63 => [
            'datapoint' => 'Warmwasser Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        64 => [
            'datapoint' => 'Warmwasser Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        65 => [
            'datapoint' => 'Sollwertkorrektur',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        66 => [
            'datapoint' => 'Sparfaktor',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        67 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        68 => [
            'datapoint' => 'Raumtemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        69 => [
            'datapoint' => 'Warmwassersolltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        70 => [
            'datapoint' => 'Programmwahl Mischer',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        71 => [
            'datapoint' => 'Programmwahl Warmwasser',
            'type' => 'DPT_DHWMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        72 => [
            'datapoint' => 'Mischer Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        73 => [
            'datapoint' => 'Mischer Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        74 => [
            'datapoint' => 'Mischer Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        75 => [
            'datapoint' => 'Warmwasser Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        76 => [
            'datapoint' => 'Warmwasser Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        77 => [
            'datapoint' => 'Warmwasser Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        78 => [
            'datapoint' => 'Sollwertkorrektur',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        79 => [
            'datapoint' => 'Sparfaktor',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        80 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        81 => [
            'datapoint' => 'Raumtemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        82 => [
            'datapoint' => 'Warmwassersolltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        83 => [
            'datapoint' => 'Programmwahl Mischer',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        84 => [
            'datapoint' => 'Programmwahl Warmwasser',
            'type' => 'DPT_DHWMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        85 => [
            'datapoint' => 'Mischer Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        86 => [
            'datapoint' => 'Mischer Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        87 => [
            'datapoint' => 'Mischer Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        88 => [
            'datapoint' => 'Warmwasser Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        89 => [
            'datapoint' => 'Warmwasser Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        90 => [
            'datapoint' => 'Warmwasser Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        91 => [
            'datapoint' => 'Sollwertkorrektur',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        92 => [
            'datapoint' => 'Sparfaktor',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        93 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        94 => [
            'datapoint' => 'Raumtemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        95 => [
            'datapoint' => 'Warmwassersolltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        96 => [
            'datapoint' => 'Programmwahl Mischer',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        97 => [
            'datapoint' => 'Programmwahl Warmwasser',
            'type' => 'DPT_DHWMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        98 => [
            'datapoint' => 'Mischer Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        99 => [
            'datapoint' => 'Mischer Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        100 => [
            'datapoint' => 'Mischer Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        101 => [
            'datapoint' => 'Warmwasser Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        102 => [
            'datapoint' => 'Warmwasser Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        103 => [
            'datapoint' => 'Warmwasser Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        104 => [
            'datapoint' => 'Sollwertkorrektur',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        105 => [
            'datapoint' => 'Sparfaktor',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        106 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        107 => [
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        108 => [
            'datapoint' => 'Gesamtmodulationsgrad',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        109 => [
            'datapoint' => 'Vorlauftemperatur Mischerkreis',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        110 => [
            'datapoint' => 'Status Mischerkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        111 => [
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        112 => [
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        113 => [
            'datapoint' => 'Eingang E2',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        114 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        115 => [
            'datapoint' => 'Warmwassertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        116 => [
            'datapoint' => 'Vorlauftemperatur Mischerkreis',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        117 => [
            'datapoint' => 'Status Mischerkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        118 => [
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        119 => [
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        120 => [
            'datapoint' => 'Eingang E2',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        121 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        122 => [
            'datapoint' => 'Warmwassertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        123 => [
            'datapoint' => 'Vorlauftemperatur Mischerkreis',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        124 => [
            'datapoint' => 'Status Mischerkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        125 => [
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        126 => [
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        127 => [
            'device' => 'Mischermodul 2',
            'datapoint' => 'Eingang E2',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        128 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        129 => [
            'datapoint' => 'Warmwassertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        130 => [
            'datapoint' => 'Vorlauftemperatur Mischerkreis',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        131 => [
            'datapoint' => 'Status Mischerkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        132 => [
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        133 => [
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        134 => [
            'datapoint' => 'Eingang E2',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        135 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        136 => [
            'datapoint' => 'Warmwassertemperatur Solar 1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        137 => [
            'datapoint' => 'Temperatur Kollektor 1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        138 => [
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        139 => [
            'datapoint' => 'Eingang E2 (Durchfluss)',
            'type' => 'DPT_Value_Volume_Flow',
            'out' => true,
            'in' => false,
            'unit' => 'l/h'
        ],
        140 => [
            'datapoint' => 'Eingang E3',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        141 => [
            'datapoint' => 'Status Solarkreispumpe SKP1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        142 => [
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        143 => [
            'datapoint' => 'Status Ausgang A2',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        144 => [
            'datapoint' => 'Status Ausgang A3',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        145 => [
            'datapoint' => 'Status Ausgang A4',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        146 => [
            'datapoint' => 'Durchfluss',
            'type' => 'DPT_Value_Volume_Flow',
            'out' => true,
            'in' => false,
            'unit' => 'l/h'
        ],
        147 => [
            'datapoint' => 'aktuelle Leistung',
            'type' => 'DPT_Power',
            'out' => true,
            'in' => false,
            'unit' => 'kW'
        ],
        148 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        149 => [
            'datapoint' => 'Programm',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        150 => [
            'datapoint' => 'Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        151 => [
            'datapoint' => 'Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        152 => [
            'datapoint' => 'Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        153 => [
            'datapoint' => 'Zeitweise Intensivlüftung AN/AUS',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        154 => [
            'datapoint' => 'Zeitweise Intensivlüftung Startdatum',
            'type' => 'DPT_Date',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        155 => [
            'datapoint' => 'Zeitweise Intensivlüftung Enddatum',
            'type' => 'DPT_Date',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        156 => [
            'datapoint' => 'Zeitweise Intensivlüftung Startzeit',
            'type' => 'DPT_TimeOfDay',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        157 => [
            'datapoint' => 'Zeitweise Intensivlüftung Endzeit',
            'type' => 'DPT_TimeOfDay',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        158 => [
            'datapoint' => 'Zeitweiser Feuchteschutz AN/AUS',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        159 => [
            'datapoint' => 'Zeitweiser Feuchteschutz Startdatum',
            'type' => 'DPT_Date',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        160 => [
            'datapoint' => 'Zeitweiser Feuchteschutz Enddatum',
            'type' => 'DPT_Date',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        161 => [
            'datapoint' => 'Zeitweiser Feuchteschutz Startzeit',
            'type' => 'DPT_TimeOfDay',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        162 => [
            'datapoint' => 'Zeitweiser Feuchteschutz Endzeit',
            'type' => 'DPT_TimeOfDay',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        163 => [
            'datapoint' => 'Lüftungsstufe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        164 => [
            'datapoint' => 'Ablufttemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        165 => [
            'datapoint' => 'Frischlufttemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        166 => [
            'datapoint' => 'Luftdurchsatz Zuluft',
            'type' => 'DPT_FlowRate',
            'out' => true,
            'in' => false,
            'unit' => 'm³/h'
        ],
        167 => [
            'datapoint' => 'Luftdurchsatz Abluft',
            'type' => 'DPT_FlowRate',
            'out' => true,
            'in' => false,
            'unit' => 'm³/h'
        ],
        168 => [
            'datapoint' => 'Bypass Initialisierung',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        169 => [
            'datapoint' => 'Bypass öffnet/offen',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        170 => [
            'datapoint' => 'Bypass schließt/geschlossen',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        171 => [
            'datapoint' => 'Bypass Fehler',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        172 => [
            'datapoint' => 'Frost Status: Initialisierung/Warte',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        173 => [
            'datapoint' => 'Frost Status: Kein Frost',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        174 => [
            'datapoint' => 'Frost Status: Vorwärmer',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        175 => [
            'datapoint' => 'Frost Status: Fehler/Unausgeglichen',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        176 => [
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        177 => [
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        178 => [
            'datapoint' => 'Heizleistung',
            'type' => 'DPT_Power',
            'out' => true,
            'in' => false,
            'unit' => 'kW'
        ],
        179 => [
            'datapoint' => 'Kühlleistung',
            'type' => 'DPT_Power',
            'out' => true,
            'in' => false,
            'unit' => 'kW'
        ],
        180 => [
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        181 => [
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        182 => [
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        183 => [
            'datapoint' => 'Warmwassertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C',
            'profile' => [
                'min' => 20,
                'max' => 65
            ]
        ],
        184 => [
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        185 => [
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        186 => [
            'datapoint' => 'Status Zubringer-/Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        187 => [
            'datapoint' => 'Status 3-Wege-Umschaltventil HZ/WW',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        188 => [
            'datapoint' => 'Status 3-Wege-Umschaltventil HZ/K',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        189 => [
            'datapoint' => 'Status E-Heizung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        190 => [
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        191 => [
            'datapoint' => 'Leistungsaufnahme',
            'type' => 'DPT_Power',
            'out' => true,
            'in' => false,
            'unit' => 'kW'
        ],
        192 => [
            'datapoint' => 'Filterwarnung aktiv',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        193 => [
            'datapoint' => 'Filterwarnung zurücksetzen',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        194 => [
            'datapoint' => '1x Warmwasserladung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        195 => [
            'datapoint' => 'Tagesertrag',
            'type' => 'DPT_ActiveEnergy',
            'out' => true,
            'in' => false,
            'unit' => 'Wh'
        ],
        196 => [
            'datapoint' => 'Gesamtertrag',
            'type' => 'DPT_ActiveEnergy_kWh',
            'out' => true,
            'in' => false,
            'unit' => 'kWh'
        ],
        197 => [
            'datapoint' => 'Abgastemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        198 => [
            'datapoint' => 'Leistungsvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        199 => [
            'datapoint' => 'Kesselsolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        200 => [
            'datapoint' => 'Abgastemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        201 => [
            'datapoint' => 'Leistungsvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        202 => [
            'datapoint' => 'Kesselsolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        203 => [
            'datapoint' => 'Abgastemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        204 => [
            'datapoint' => 'Leistungsvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        205 => [
            'datapoint' => 'Kesselsolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        206 => [
            'datapoint' => 'Abgastemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        207 => [
            'datapoint' => 'Leistungsvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        208 => [
            'datapoint' => 'Kesselsolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        209 => [
            'datapoint' => 'Gesamtmodulationsgradvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        210 => [
            'datapoint' => 'Sammlersolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ]
    ];

    /**
     * get profile
     * @param string $profile_key
     * @param bool $unit
     * @return mixed profile
     */
    public static function getProfile($profile_key = null, $unit = false)
    {
        $profile = [];
        if (isset(self::$profiles[$profile_key])) {
            $profile = self::$profiles[$profile_key];
        }

        if ($unit) {
            $profile['suffix'] = $unit;
        }

        if ($profile) {
            $profile['id'] = $profile_key;
        }

        return empty($profile) ? false : $profile;
    }

    /**
     * get datapoint
     * @param int $datapoint_id
     * @return bool
     */
    public static function getDatapoint($datapoint_id = 0)
    {
        if (isset(self::$datapoints[$datapoint_id])) {
            $datapoint = self::$datapoints[$datapoint_id];
            $datapoint['device'] = self::getDevice($datapoint_id);
            return $datapoint;
        }
        return false;
    }

    /**
     * get device key by datapoint id
     * @param int $datapoint_id
     * @return string
     */
    public static function getDevice($datapoint_id = 0)
    {
        if ($datapoint_id >= 1 && $datapoint_id <= 13) {
            return self::$devices['hg1'];
        } else if ($datapoint_id >= 14 && $datapoint_id <= 26) {
            return self::$devices['hg2'];
        } else if ($datapoint_id >= 27 && $datapoint_id <= 39) {
            return self::$devices['hg3'];
        } else if ($datapoint_id >= 40 && $datapoint_id <= 52) {
            return self::$devices['hg4'];
        } else if (($datapoint_id >= 53 && $datapoint_id <= 66) || in_array($datapoint_id, [194, 197, 198, 199])) {
            return self::$devices['bm1'];
        } else if (($datapoint_id >= 67 && $datapoint_id <= 79) || in_array($datapoint_id, [200, 201, 202])) {
            return self::$devices['bm2'];
        } else if (($datapoint_id >= 80 && $datapoint_id <= 92) || in_array($datapoint_id, [203, 204, 205])) {
            return self::$devices['bm3'];
        } else if (($datapoint_id >= 93 && $datapoint_id <= 105) || in_array($datapoint_id, [206, 207, 208])) {
            return self::$devices['bm4'];
        } else if (($datapoint_id >= 106 && $datapoint_id <= 113) || in_array($datapoint_id, [209, 210])) {
            return self::$devices['km1'];
        } else if ($datapoint_id >= 114 && $datapoint_id <= 120) {
            return self::$devices['mm1'];
        } else if ($datapoint_id >= 121 && $datapoint_id <= 127) {
            return self::$devices['mm2'];
        } else if ($datapoint_id >= 128 && $datapoint_id <= 134) {
            return self::$devices['mm3'];
        } else if (($datapoint_id >= 135 && $datapoint_id <= 147) || in_array($datapoint_id, [195, 196])) {
            return self::$devices['sm1'];
        } else if (($datapoint_id >= 148 && $datapoint_id <= 175) || in_array($datapoint_id, [192, 193])) {
            return self::$devices['cwl'];
        } else if ($datapoint_id >= 176 && $datapoint_id <= 191) {
            return self::$devices['hg0'];
        } else {
            return 'unknown';
        }
    }
}