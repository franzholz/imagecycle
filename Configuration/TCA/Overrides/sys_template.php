<?php
defined('TYPO3') || die('Access denied.');

if (!defined ('IMAGECYLCE_EXT')) {
    define('IMAGECYLCE_EXT', 'imagecycle');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    IMAGECYLCE_EXT,#
    'Configuration/TypoScript/PluginSetup/',
    'Image-Cycle'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    IMAGECYLCE_EXT,
    'Configuration/TypoScript/PluginSetup/tt_content/',
    'Image-Cycle for tt_content'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    IMAGECYLCE_EXT,
    'Configuration/TypoScript/PluginSetup/coinslider/',
    'Coin-Slider'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    IMAGECYLCE_EXT,
    'Configuration/TypoScript/PluginSetup/nivoslider/',
    'Nivo-Slider'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    IMAGECYLCE_EXT,
    'Configuration/TypoScript/PluginSetup/crossslide/',
    'Cross-Slide'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    IMAGECYLCE_EXT,
    'Configuration/TypoScript/PluginSetup/slicebox/', 
    'Slice-Box'
);


