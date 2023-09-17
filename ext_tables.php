<?php

defined('TYPO3') or die();
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('@import "EXT:plate_layoutces/Configuration/TsConfig/page.tsconfig"');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig("@import 'EXT:plate_layoutces/Configuration/TsConfig/user.tsconfig'");

