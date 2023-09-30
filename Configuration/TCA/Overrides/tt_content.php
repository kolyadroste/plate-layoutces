<?php
defined('TYPO3') or die();

// Adds the content element to the "Type" dropdown
call_user_func(function($extension = 'plate_layoutces', $cePath = '/Resources/Private/CEs/',  $configPath = '/Config/') {

    $publicPath =  \TYPO3\CMS\Core\Core\Environment::getPublicPath();
    $rootPath = \TYPO3\CMS\Core\Core\Environment::getProjectPath();
    $extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('plate_layoutces');
    // scan LayoutElement Folders
    $layoutElementsPath = $extPath .'Resources/Private/CEs/';
    // locate all plate LayoutElementFolders (contentElements)
    $layoutElements = \Atomicplan\PlateLayoutCes\Utility\TcaHelpers::getSubFolderNames($layoutElementsPath);

    // todo: define helpers in class
    include ($extPath. 'Configuration/TCA/Utilities/TcaFieldHelper.php');
    /* plugin Configuration */
    $layoutElementsPath = $extPath .$cePath;

    foreach ($layoutElements as $ce){

        $plugin = 'tx_' . $extension . '_' .strtolower($ce);
        $plugin_locallang_file = 'll_' .strtolower($ce) .'.xlf';

        // load config from Ce Folder
        // todo: define helpers in class
        include($extPath .$cePath .$ce .$configPath .'/tt_content.php');

        if(file_exists($extPath .$cePath .$ce .$configPath.'flexform.xml')){
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
                '*',
                'FILE:EXT:'.$extension .$cePath .$ce .$configPath .'flexform.xml',
                'tx_'.$extension.'_' .strtolower($ce)
            );
        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            array(
                //'LLL::EXT:' . $extension . '/Resources/Private/Language/' . $plugin_locallang_file . ':title',
                'LLL:EXT:' . $extension . $cePath .$ce .$configPath .'ll.xlf:title',
                $plugin,
                'EXT:' . $extension . 'Resources/Public/CeIcons' .$ce .'.svg'
                //'EXT:' . $extension . '/Resources/Public/Icons/' .$ce .'.svg'
            ),
            'CType',
            $plugin
        );

    }


    $pp_additional_columns = [
        'tx_plate_layoutces_margins' => [
            'exclude' => true,
            'label' => 'Abstände (oben, rechts, unten, links) (10px, 0, 10px, 0)',
            'config' => [
                'type' => 'input',
            ]
        ],

        'tx_plate_layoutces_showatxs' => [
            'exclude' => true,
            'label' => 'Zeige bei XS',
            'config' => [
                'type' => 'check',
                'default' => '1',
            ],
            'default' => '1',
        ],
        'tx_plate_layoutces_showatsm' => [
            'exclude' => true,
            'label' => 'Zeige bei SM',
            'config' => [
                'type' => 'check',
                'default' => '1',
            ],
            'default' => '1',
        ],
        'tx_plate_layoutces_smbp' => [
            'exclude' => true,
            'label' => 'SM Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '576',

            ]
        ],
        'tx_plate_layoutces_showatmd' => [
            'exclude' => true,
            'label' => 'Zeige bei MD',
            'config' => [
                'type' => 'check',
                'default' => '1',

            ]
        ],
        'tx_plate_layoutces_mdbp' => [
            'exclude' => true,
            'label' => 'MD Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '768',

            ]
        ],
        'tx_plate_layoutces_showatlg' => [
            'exclude' => true,
            'label' => 'Zeige bei LG',
            'config' => [
                'type' => 'check',
                'default' => '1',

            ]
        ],
        'tx_plate_layoutces_lgbp' => [
            'exclude' => true,
            'label' => 'LG Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '992',

            ]
        ],
        'tx_plate_layoutces_showatxl' => [
            'exclude' => true,
            'label' => 'Zeige bei XL',
            'config' => [
                'type' => 'check',
                'default' => '1',

            ]
        ],
        'tx_plate_layoutces_xlbp' => [
            'exclude' => true,
            'label' => 'XL Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '1200',

            ]
        ],
        'tx_plate_layoutces_showatxxl' => [
            'exclude' => true,
            'label' => 'Zeige bei XXL',
            'config' => [
                'type' => 'check',
                'default' => '1',

            ]
        ],
        'tx_plate_layoutces_xxlbp' => [
            'exclude' => true,
            'label' => 'XXL Breakpoint',
            'config' => [
                'type' => 'input',
                'default' => '1400',

            ]
        ],
        
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $pp_additional_columns);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content',
        'layoutCesVisibilityPalette', 'tx_plate_layoutces_showatxs, tx_plate_layoutces_smbp, tx_plate_layoutces_showatsm, tx_plate_layoutces_mdbp, tx_plate_layoutces_showatmd,  tx_plate_layoutces_lgbp,  tx_plate_layoutces_showatlg, tx_plate_layoutces_xlbp, tx_plate_layoutces_showatxl,tx_plate_layoutces_xxlbp,tx_plate_layoutces_showatxxl');


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content',
        'layoutCesMarginPalette', 'space_before_class, space_after_class');


});
