<?php
defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function($extensionKey, $table)
{
    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/PluginSetup/',
        'Image-Cycle'
    );

    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/PluginSetup/tt_content/',
        'Image-Cycle for tt_content'
    );

    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/PluginSetup/coinslider/',
        'Coin-Slider'
    );

    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/PluginSetup/nivoslider/',
        'Nivo-Slider'
    );

    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/PluginSetup/crossslide/',
        'Cross-Slide'
    );

    ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript/PluginSetup/slicebox/', 
        'Slice-Box'
    );
}, 'imagecycle', basename(__FILE__, '.php'));

