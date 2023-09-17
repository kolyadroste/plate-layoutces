<?php
defined('TYPO3') or die();

/*
 * plugin Field definitions
 * */
$plugin_showfields = '--palette--;;general,header,
    --div--;Einstellungen,pi_flexform,
    --div--;Darstellung,--palette--;;layoutCesMarginPalette,
    --div--;Sichtbarkeit,hidden,--palette--;;layoutCesVisibilityPalette';

/**
 * Register columns2
 */
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            $plugin,
            'threeColumnTitle',
            'twoColumnDescription',
            [
                [
                    [
                        'name' => 'Links',
                        'colPos' => 101
                    ],
                    [
                        'name' => 'Mitte',
                        'colPos' => 102
                    ],
                    [
                        'name' => 'Rechts',
                        'colPos' => 103
                    ]
                ],
            ]
        )
    )
        ->setIcon($plugin.'icon')
        ->setSaveAndCloseInNewContentElementWizard(true)
);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types'][$plugin]['showitem'] = $plugin_showfields;

// add columnsOverrides if not set
if (!isset($GLOBALS['TCA']['tt_content']['types'][$plugin]['columnsOverrides'])) {
    $GLOBALS['TCA']['tt_content']['types'][$plugin]['columnsOverrides'] = [];
}

$GLOBALS['TCA']['tt_content']['types'][$plugin]['columnsOverrides']['header'] = [
    'label' => 'Bezeichner (Nur für das Typo3 Backend)',
    'config' => [
        'type' => 'input'
    ]
];