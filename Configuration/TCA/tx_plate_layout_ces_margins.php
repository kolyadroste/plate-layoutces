<?php
return [
    'ctrl' => [
        'label' => 'text',
        'tstamp' => 'tstamp',
        'title' => 'Infoblock',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'sortby' => 'sorting',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'iconfile' => 'EXT:plate_ces/Resources/Private/CEs/InfoBlocks/Config/icon.svg',
    ],
    'interface' => [
        'showRecordFieldList' => 'title',
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
    ],
    'columns' => [
        'hidden' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => 0,
            ],
        ],
        'smbp_margin' => [
            'exclude' => true,
            'label' => 'XL Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '288',

            ]
        ],
        'mdbp_margin' => [
            'exclude' => true,
            'label' => 'MD Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '576',

            ]
        ],
        'lgbp_margin' => [
            'exclude' => true,
            'label' => 'MD Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '768',

            ]
        ],
        'xlbp_margin' => [
            'exclude' => true,
            'label' => 'MD Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '992',

            ]
        ],
    ],

    'types' => [
        '0' => [
            'showitem' => '--palette--;;general,description,--palette--;;media',
        ],

    ],
    'palettes' => [
        'general' => [
            'label' => 'Text',
            'showitem' => 'header,hidden,layout,typolink',
        ],
        'media' => [
            'label' => 'Medien',
            'showitem' => 'image,tx_plate_ces_icon',
        ],
    ],
];
