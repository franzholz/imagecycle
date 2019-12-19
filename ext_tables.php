<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('imagecycle', 'static/', 'Image-Cycle');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('imagecycle', 'static/tt_content/', 'Image-Cycle for tt_content');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('imagecycle', 'static/coinslider/', 'Coin-Slider');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('imagecycle', 'static/nivoslider/', 'Nivo-Slider');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('imagecycle', 'static/crossslide/', 'Cross-Slide');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('imagecycle', 'static/slicebox/',   'Slice-Box');


