<?php

defined('TYPO3') or die();

call_user_func(function() {

    $publicPath =  \TYPO3\CMS\Core\Core\Environment::getPublicPath();
    $rootPath = \TYPO3\CMS\Core\Core\Environment::getProjectPath();
    $extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('plate_layoutces');
    $extName = 'plate_layoutces';
    // scan LayoutElement Folders


    // scan LayoutElement Folders
    $layoutElementsPath = $extPath .'Resources/Private/CEs/';

    // locate all plate LayoutElementFolders (contentElements)
    $layoutElements = \Atomicplan\PlateLayoutCes\Utility\TcaHelpers::getSubFolderNames($layoutElementsPath);

    // add as typoscript constants as well
    $constants = [
        "plate_layoutces.pathPublic" => $publicPath,
        "plate_layoutces.pathRoot" => $rootPath,
        "plate_layoutces.path" => $extPath
    ];

    $lines = [];
    foreach ($constants as $name => $value) {
        $lines[] = "$name=$value";
    }

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(implode(PHP_EOL, $lines));

    // include content elements localconf
    include($extPath . 'Configuration/TCA/Utilities/DefinePluginHelper.php');

    // add typoscript
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        "plate_ces",
        "setup",
        "@import 'EXT:plate_layoutces/Configuration/TypoScript/setup.typoscript'"
    );

    // based on scanned Folders in LayoutElements add Plugin and Typoscript
    foreach($layoutElements as $folderName){
        $lowercaseFoldername = strtolower($folderName);
        $definePlugin('plate_layoutces', $folderName, 'layout', '');
        // add typoscript
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
            'plate_layputces_' .$lowercaseFoldername,
            "setup",
            "@import 'EXT:plate_layoutces/Resources/Private/CEs/" .$folderName ."/Config/'"
        );
    }

});