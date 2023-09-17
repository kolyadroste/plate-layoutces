<?php
defined('TYPO3') or die();

/*
 * plugin Field definitions
 * */
$plugin_showfields = '--palette--;;general,header,
    --div--;Einstellungen,pi_flexform,
    --div--;Darstellung,--palette--;;layoutCesMarginPalette,--palette--;;layoutCesBgColorPalette,
    --div--;Sichtbarkeit,hidden,--palette--;;layoutCesVisibilityPalette';

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
                        'name' => 'Inhalt',
                        'colPos' => 101
                    ]
                ],
            ]
        )
    )
        ->setIcon($plugin.'icon')
        ->setSaveAndCloseInNewContentElementWizard(false)
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