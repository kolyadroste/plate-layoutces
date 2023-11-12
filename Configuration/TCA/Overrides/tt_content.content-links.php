<?php
defined('TYPO3') or die;

call_user_func(function(){
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',[
		'tx_pl_lces_contentlinks_add_to_nav' => [
			'exclude' => true,
			'label' => 'In Navigation anzeigen',
			'config' => [
				'type' => 'check',
				'default' => ''
			]
		],
		'pl_lces_nav_title' => [
			'exclude' => true,
			'label' => 'Navigationstitel',
			'config' => [
				'type' => 'input',
				'default' => ''
			]
		],
	]);

	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
		'tt_content',
		'--div--;Navigation,tx_pl_lces_contentlinks_add_to_nav,pl_lces_nav_title'
	);
});
