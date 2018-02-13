<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car',
        'label' => 'manufacturer',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'manufacturer,model,year,class,fuel_type,savings,cylinders,city_m_p_g,highway_m_p_g,combined_m_p_g,fuel_cost',
        'iconfile' => 'EXT:car_data/Resources/Public/Icons/tx_cardata_domain_model_car.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, manufacturer, model, year, class, fuel_type, savings, cylinders, city_m_p_g, highway_m_p_g, combined_m_p_g, fuel_cost',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, manufacturer, model, year, class, fuel_type, savings, cylinders, city_m_p_g, highway_m_p_g, combined_m_p_g, fuel_cost, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_cardata_domain_model_car',
                'foreign_table_where' => 'AND tx_cardata_domain_model_car.pid=###CURRENT_PID### AND tx_cardata_domain_model_car.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'manufacturer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.manufacturer',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'model' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.model',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'year' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.year',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'class' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.class',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'fuel_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.fuel_type',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'savings' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.savings',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'cylinders' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.cylinders',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'city_m_p_g' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.city_m_p_g',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'highway_m_p_g' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.highway_m_p_g',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'combined_m_p_g' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.combined_m_p_g',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'fuel_cost' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_data/Resources/Private/Language/locallang_db.xlf:tx_cardata_domain_model_car.fuel_cost',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
    
    ],
];
