<?php
defined('TYPO3') or die();

/*
 * plugin Field definitions
 * */
$plugin_showfields = '--palette--;;general,header,bodytext,
    --div--;Darstellung,--palette--;;layoutCesMarginPalette,background_color_class,
    --div--;Sichtbarkeit,hidden,--palette--;;layoutCesVisibilityPalette';





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
                'enableRichtext' => true
            ]
        ],
    ]
];
