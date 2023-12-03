<?php
defined('TYPO3') or die();

/*
 * plugin Field definitions
 * */
$plugin_showfields = '--palette--;;general,header,image,media2,
    --div--;Einstellungen,pi_flexform,
    --div--;Darstellung,--palette--;;layoutCesMarginPalette,
    --div--;Sichtbarkeit,hidden,--palette--;;layoutCesVisibilityPalette';


$pp_additional_columns = [
    'tx_plate_layoutces_show_search' => $plateCheck("Zeige suche", true),
    'tx_plate_layoutces_show_contactinfo' => $plateCheck("Zeige Kontakt-Informationen", true),
    'tx_plate_ttc_additions_links' => [
        'exclude' => 1,
        'label' => 'Links',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_plate_ttc_additions_links',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
            'foreign_label' => 'header',
            'foreign_sortby' => 'sorting',
            'maxitems' => 30,
            'appearance' => [
                'collapseAll' => 1,
                'expandSingle' => 1,
            ],
        ],
    ]
];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $pp_additional_columns);


/**
 * Register columns2
 */
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            $plugin,
            'twoColumnTitle',
            'twoColumnDescription',
            [
                [
                    [
                        'name' => 'Links',
                        'colPos' => 101
                    ],
                    [
                        'name' => 'Rechts',
                        'colPos' => 102
                    ]
                ],
            ]
        )
    )
        ->setIcon($plugin.'icon')
        ->setSaveAndCloseInNewContentElementWizard(true)
);


// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types'][$plugin] = [
    'showitem' => $plugin_showfields,
    'columnsOverrides' => [
        'header' => [
            'label' => 'Bezeichner (Nur für das Typo3 Backend)',
            'config' => [
                'type' => 'input'
            ]
        ],
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default'
            ]
        ],
        'image' => [
            'label' => 'Logo',
            'config' => [
                'maxitems' => 1
            ]
        ],
		'media2' => [
			'label' => 'Sticky Logo',
			'config' => [
				'maxitems' => 1
			]
		],
    ]
];
