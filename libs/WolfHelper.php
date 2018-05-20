<?php

trait WolfHelper
{
    protected $profiles = [
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
    protected $datapoints = [
        1 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false,
        ],
        2 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        3 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Modulationsgrad / Brennerleistung',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        4 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        5 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        6 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        7 => [
            'device' => 'Heizgerät 1',
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
            'device' => 'Heizgerät 1',
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        9 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Status Brenner / Flamme',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        10 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        11 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Status Speicherladepumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        12 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Status 3-Wege-Umschaltventil',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        13 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        14 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        15 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        16 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Modulationsgrad / Brennerleistung',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        17 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        18 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        19 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        20 => [
            'device' => 'Heizgerät 2',
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
            'device' => 'Heizgerät 2',
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        22 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Status Brenner / Flamme',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        23 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        24 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Status Speicherladepumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        25 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Status 3-Wege-Umschaltventil',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        26 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        27 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        28 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        29 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Modulationsgrad / Brennerleistung',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        30 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        31 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        32 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        33 => [
            'device' => 'Heizgerät 3',
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
            'device' => 'Heizgerät 3',
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        35 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Status Brenner / Flamme',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        36 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        37 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Status Speicherladepumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        38 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Status 3-Wege-Umschaltventil',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        39 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        40 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        41 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        42 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Modulationsgrad / Brennerleistung',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        43 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        44 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        45 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        46 => [
            'device' => 'Heizgerät 4',
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
            'device' => 'Heizgerät 4',
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        48 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Status Brenner / Flamme',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        49 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        50 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Status Speicherladepumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        51 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Status 3-Wege-Umschaltventil',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        52 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        53 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        54 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        55 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Raumtemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        56 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Warmwassersolltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        57 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Programmwahl Heizkreis',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        58 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Programmwahl Warmwasser',
            'type' => 'DPT_DHWMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        59 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Heizkreis Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        60 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Heizkreis Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        61 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Heizkreis Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        62 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Warmwasser Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        63 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Warmwasser Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        64 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Warmwasser Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        65 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Sollwertkorrektur',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        66 => [
            'device' => 'BM-2 0',
            'datapoint' => 'Sparfaktor',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        67 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        68 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Raumtemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        69 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Warmwassersolltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        70 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Programmwahl Mischer',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        71 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Programmwahl Warmwasser',
            'type' => 'DPT_DHWMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        72 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Mischer Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        73 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Mischer Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        74 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Mischer Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        75 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Warmwasser Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        76 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Warmwasser Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        77 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Warmwasser Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        78 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Sollwertkorrektur',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        79 => [
            'device' => 'BM-2 1',
            'datapoint' => 'Sparfaktor',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        80 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        81 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Raumtemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        82 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Warmwassersolltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        83 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Programmwahl Mischer',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        84 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Programmwahl Warmwasser',
            'type' => 'DPT_DHWMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        85 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Mischer Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        86 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Mischer Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        87 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Mischer Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        88 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Warmwasser Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        89 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Warmwasser Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        90 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Warmwasser Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        91 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Sollwertkorrektur',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        92 => [
            'device' => 'BM-2 2',
            'datapoint' => 'Sparfaktor',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        93 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        94 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Raumtemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        95 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Warmwassersolltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        96 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Programmwahl Mischer',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        97 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Programmwahl Warmwasser',
            'type' => 'DPT_DHWMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        98 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Mischer Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        99 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Mischer Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        100 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Mischer Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        101 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Warmwasser Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        102 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Warmwasser Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        103 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Warmwasser Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        104 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Sollwertkorrektur',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        105 => [
            'device' => 'BM-2 3',
            'datapoint' => 'Sparfaktor',
            'type' => 'DPT_Value_Tempd',
            'out' => true,
            'in' => true,
            'unit' => 'K'
        ],
        106 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        107 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        108 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Gesamtmodulationsgrad',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        109 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Vorlauftemperatur Mischerkreis',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        110 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Status Mischerkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        111 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        112 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        113 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Eingang E2',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        114 => [
            'device' => 'Mischermodul 1',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        115 => [
            'device' => 'Mischermodul 1',
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
            'device' => 'Mischermodul 1',
            'datapoint' => 'Vorlauftemperatur Mischerkreis',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        117 => [
            'device' => 'Mischermodul 1',
            'datapoint' => 'Status Mischerkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        118 => [
            'device' => 'Mischermodul 1',
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        119 => [
            'device' => 'Mischermodul 1',
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        120 => [
            'device' => 'Mischermodul 1',
            'datapoint' => 'Eingang E2',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        121 => [
            'device' => 'Mischermodul 2',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        122 => [
            'device' => 'Mischermodul 2',
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
            'device' => 'Mischermodul 2',
            'datapoint' => 'Vorlauftemperatur Mischerkreis',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        124 => [
            'device' => 'Mischermodul 2',
            'datapoint' => 'Status Mischerkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        125 => [
            'device' => 'Mischermodul 2',
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        126 => [
            'device' => 'Mischermodul 2',
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
            'device' => 'Mischermodul 3',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        129 => [
            'device' => 'Mischermodul 3',
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
            'device' => 'Mischermodul 3',
            'datapoint' => 'Vorlauftemperatur Mischerkreis',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        131 => [
            'device' => 'Mischermodul 3',
            'datapoint' => 'Status Mischerkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        132 => [
            'device' => 'Mischermodul 3',
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        133 => [
            'device' => 'Mischermodul 3',
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        134 => [
            'device' => 'Mischermodul 3',
            'datapoint' => 'Eingang E2',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        135 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        136 => [
            'device' => 'Solarmodul',
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
            'device' => 'Solarmodul',
            'datapoint' => 'Temperatur Kollektor 1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        138 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Eingang E1',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        139 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Eingang E2 (Durchfluss)',
            'type' => 'DPT_Value_Volume_Flow',
            'out' => true,
            'in' => false,
            'unit' => 'l/h'
        ],
        140 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Eingang E3',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        141 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Status Solarkreispumpe SKP1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        142 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Status Ausgang A1',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        143 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Status Ausgang A2',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        144 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Status Ausgang A3',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        145 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Status Ausgang A4',
            'type' => 'DPT_Enable',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        146 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Durchfluss',
            'type' => 'DPT_Value_Volume_Flow',
            'out' => true,
            'in' => false,
            'unit' => 'l/h'
        ],
        147 => [
            'device' => 'Solarmodul',
            'datapoint' => 'aktuelle Leistung',
            'type' => 'DPT_Power',
            'out' => true,
            'in' => false,
            'unit' => 'kW'
        ],
        148 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        149 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Programm',
            'type' => 'DPT_HVACMode',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        150 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitprogramm 1',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        151 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitprogramm 2',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        152 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitprogramm 3',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        153 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweise Intensivlüftung AN/AUS',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        154 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweise Intensivlüftung Startdatum',
            'type' => 'DPT_Date',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        155 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweise Intensivlüftung Enddatum',
            'type' => 'DPT_Date',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        156 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweise Intensivlüftung Startzeit',
            'type' => 'DPT_TimeOfDay',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        157 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweise Intensivlüftung Endzeit',
            'type' => 'DPT_TimeOfDay',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        158 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweiser Feuchteschutz AN/AUS',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        159 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweiser Feuchteschutz Startdatum',
            'type' => 'DPT_Date',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        160 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweiser Feuchteschutz Enddatum',
            'type' => 'DPT_Date',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        161 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweiser Feuchteschutz Startzeit',
            'type' => 'DPT_TimeOfDay',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        162 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Zeitweiser Feuchteschutz Endzeit',
            'type' => 'DPT_TimeOfDay',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        163 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Lüftungsstufe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => false,
            'unit' => '%'
        ],
        164 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Ablufttemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        165 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Frischlufttemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        166 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Luftdurchsatz Zuluft',
            'type' => 'DPT_FlowRate',
            'out' => true,
            'in' => false,
            'unit' => 'm³/h'
        ],
        167 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Luftdurchsatz Abluft',
            'type' => 'DPT_FlowRate',
            'out' => true,
            'in' => false,
            'unit' => 'm³/h'
        ],
        168 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Bypass Initialisierung',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        169 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Bypass öffnet/offen',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        170 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Bypass schließt/geschlossen',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        171 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Bypass Fehler',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        172 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Frost Status: Initialisierung/Warte',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        173 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Frost Status: Kein Frost',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        174 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Frost Status: Vorwärmer',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        175 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Frost Status: Fehler/Unausgeglichen',
            'type' => 'DPT_Bool',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        176 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Störung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        177 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Betriebsart',
            'type' => 'DPT_HVACContrMode',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        178 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Heizleistung',
            'type' => 'DPT_Power',
            'out' => true,
            'in' => false,
            'unit' => 'kW'
        ],
        179 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Kühlleistung',
            'type' => 'DPT_Power',
            'out' => true,
            'in' => false,
            'unit' => 'kW'
        ],
        180 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Kesseltemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        181 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Sammlertemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        182 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Rücklauftemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        183 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
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
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Außentemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        185 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Status Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        186 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Status Zubringer-/Heizkreispumpe',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        187 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Status 3-Wege-Umschaltventil HZ/WW',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        188 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Status 3-Wege-Umschaltventil HZ/K',
            'type' => 'DPT_OpenClose',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        189 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Status E-Heizung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        190 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Anlagendruck',
            'type' => 'DPT_Value_Pres',
            'out' => true,
            'in' => false,
            'unit' => 'Pa'
        ],
        191 => [
            'device' => 'Heizgerät 1 (BWL-1-S)',
            'datapoint' => 'Leistungsaufnahme',
            'type' => 'DPT_Power',
            'out' => true,
            'in' => false,
            'unit' => 'kW'
        ],
        192 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Filterwarnung aktiv',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => false,
            'unit' => false
        ],
        193 => [
            'device' => 'CWL Excellent',
            'datapoint' => 'Filterwarnung zurücksetzen',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        194 => [
            'device' => 'BM-2 0',
            'datapoint' => '1x Warmwasserladung',
            'type' => 'DPT_Switch',
            'out' => true,
            'in' => true,
            'unit' => false
        ],
        195 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Tagesertrag',
            'type' => 'DPT_ActiveEnergy',
            'out' => true,
            'in' => false,
            'unit' => 'Wh'
        ],
        196 => [
            'device' => 'Solarmodul',
            'datapoint' => 'Gesamtertrag',
            'type' => 'DPT_ActiveEnergy_kWh',
            'out' => true,
            'in' => false,
            'unit' => 'kWh'
        ],
        197 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Abgastemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        198 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Leistungsvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        199 => [
            'device' => 'Heizgerät 1',
            'datapoint' => 'Kesselsolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        200 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Abgastemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        201 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Leistungsvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        202 => [
            'device' => 'Heizgerät 2',
            'datapoint' => 'Kesselsolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        203 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Abgastemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        204 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Leistungsvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        205 => [
            'device' => 'Heizgerät 3',
            'datapoint' => 'Kesselsolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        206 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Abgastemperatur',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => false,
            'unit' => '°C'
        ],
        207 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Leistungsvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        208 => [
            'device' => 'Heizgerät 4',
            'datapoint' => 'Kesselsolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ],
        209 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Gesamtmodulationsgradvorgabe',
            'type' => 'DPT_Scaling',
            'out' => true,
            'in' => true,
            'unit' => '%'
        ],
        210 => [
            'device' => 'Kaskadenmodul',
            'datapoint' => 'Sammlersolltemperaturvorgabe',
            'type' => 'DPT_Value_Temp',
            'out' => true,
            'in' => true,
            'unit' => '°C'
        ]
    ];

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
                if (isset($this->datapoints[$datapoint_id])) {
                    // get datapoint by id
                    $datapoint = $this->datapoints[$datapoint_id];

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
                        'out' => $datapoint['out'],
                        'in' => $datapoint['in'],
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
        if (isset($this->datapoints[$datapoint_id])) {
            // get datapoint
            $datapoint = $this->datapoints[$datapoint_id];

            // convert value
            if (method_exists(__CLASS__, $datapoint['type'])) {
                $value = call_user_func_array([__CLASS__, $datapoint['type']], [$value, true]);
            }

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
                    'DataID' => ISM_SPLITTER,
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

    /**
     * @param string $profile_key
     * @param bool $unit
     * @return mixed profile
     */
    private function getProfile($profile_key = null, $unit = false)
    {
        $profile = [];
        if (isset($this->profiles[$profile_key])) {
            $profile = $this->profiles[$profile_key];
        }

        if ($unit) {
            $profile['suffix'] = $unit;
        }

        if ($profile) {
            $profile['id'] = $profile_key;
        }

        return empty($profile) ? false : $profile;
    }
}