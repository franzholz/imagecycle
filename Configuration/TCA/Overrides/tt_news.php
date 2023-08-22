<?php
defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function($extensionKey, $table)
{
    $table = 'tt_news';

    // tt_news
    if (ExtensionManagementUtility::isLoaded('tt_news')) {
        // CONTENT
        $tempColumns = array(
            'tx_imagecycle_activate' => array(
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecycle_activate',
                'config' => array(
                    'type' => 'check',
                )
            ),
            'tx_imagecycle_duration' => array(
                'exclude' => 1,
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecycle_duration',
                'config' => array(
                    'type' => 'input',
                    'size' => '5',
                    'trim' => 'int',
                    'default' => '6000'
                )
            ),
        );

        ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript/PluginSetup/tt_news/', 'Image-Cycle for tt_news - Cycle');
        ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript/PluginSetup/tt_news/nivoslider/', 'Image-Cycle for tt_news - Nivo');
        ExtensionManagementUtility::addTCAcolumns($table, $tempColumns);
        $GLOBALS['TCA'][$table]['palettes']['tx_imagecycle'] = array(
            'showitem' => 'tx_imagecycle_activate,tx_imagecycle_duration',
            'canNotCollapse' => 1,
        );
        ExtensionManagementUtility::addToAllTCAtypes($table, '--palette--;LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.tx_imagecycle_title;tx_imagecycle', '', 'after:image');
    }
}, 'imagecycle', basename(__FILE__, '.php'));
