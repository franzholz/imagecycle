<?php

namespace Typo3Extension\Imagecycle\Backend;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Juergen Furrer <juergen.furrer@gmail.com>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Messaging\FlashMessageQueue;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;


/**
 * 'itemsProcFunc' for the 'imagecycle' extension.
 *
 * @author     Juergen Furrer <juergen.furrer@gmail.com>
 * @package    TYPO3
 * @subpackage tx_imagecycle
 */
class ItemsProcFunc
{
    $extensionKey = 'imagecycle';

	/**
	 * Get defined Effects for dropdown
	 * @return array
	 */
	public function getEffects($config, $item)
	{
        $extensionConfiguration = GeneralUtility::makeInstance(
            ExtensionConfiguration::class
        )->get($this->extensionKey);
		$availableEffects = GeneralUtility::trimExplode(',', $extensionConfiguration['effects'], true);
		if (count($availableEffects) < 1) {
			$availableEffects = array('none','blindX','blindY','blindZ','cover','curtainX','curtainY','fade','fadeout','fadeZoom','growX','growY','scrollUp','scrollDown','scrollLeft','scrollRight','scrollHorz','scrollVert','shuffle','slideX','slideY','toss','turnUp','turnDown','turnLeft','turnRight','uncover','wipe','zoom','all');
		}
		$pageTS = BackendUtility::getPagesTSconfig($config['row']['pid']);
		$imagecycleEffects = GeneralUtility::trimExplode(',', $pageTS['mod.']['imagecycle.']['effects'], true);
		$optionList = array();
		if (is_array($imagecycleEffects) && count($imagecycleEffects) > 0) {
			foreach ($availableEffects as $key => $availableEffect) {
				if (in_array(trim($availableEffect), $imagecycleEffects)) {
					$optionList[] = array(
						trim($availableEffect),
						trim($availableEffect),
					);
				}
			}
		} else {
			foreach ($availableEffects as $key => $availableEffect) {
				$optionList[] = array(
					trim($availableEffect),
					trim($availableEffect),
				);
			}
		}
		if (isset($config['items']) && is_array($config['items'])) {
			$config['items'] = array_merge($config['items'], $optionList);
		}
		return $config;
	}

	/**
	 * Get defined Effects for dropdown
	 * @return array
	 */
	public function getEffectsCoin($config, $item)
	{
        $extensionConfiguration = GeneralUtility::makeInstance(
            ExtensionConfiguration::class
        )->get($this->extensionKey);
		$availableEffects = GeneralUtility::trimExplode(',', $extensionConfiguration['effectsCoin'], true);
		if (count($availableEffects) < 1) {
			$availableEffects = array('random','swirl','rain','straight');
		}
		$pageTS = BackendUtility::getPagesTSconfig($config['row']['pid']);
		$imagecycleEffects = GeneralUtility::trimExplode(',', $pageTS['mod.']['imagecycle.']['effectsCoin'], true);
		$optionList = array();
		if (is_array($imagecycleEffects) && count($imagecycleEffects) > 0) {
			foreach ($availableEffects as $key => $availableEffect) {
				if (in_array(trim($availableEffect), $imagecycleEffects)) {
					$optionList[] = array(
						trim($availableEffect),
						trim($availableEffect),
					);
				}
			}
		} else {
			foreach ($availableEffects as $key => $availableEffect) {
				$optionList[] = array(
					trim($availableEffect),
					trim($availableEffect),
				);
			}
		}
		if (isset($config['items']) && is_array($config['items'])) {
			$config['items'] = array_merge($config['items'], $optionList);
		}
		return $config;
	}

	/**
	 * Get defined Effects for dropdown
	 * @return array
	 */
	public function getEffectsNivo($config, $item)
	{
        $extensionConfiguration = GeneralUtility::makeInstance(
            ExtensionConfiguration::class
        )->get($this->extensionKey);
		$availableEffects = GeneralUtility::trimExplode(',', $extensionConfiguration['effectsNivo'], true);
		if (count($availableEffects) < 1) {
			$availableEffects = array('random','sliceDown','sliceDownLeft','sliceUp','sliceUpLeft','sliceUpDown','sliceUpDownLeft','fold','fade','slideInRight','slideInLeft', 'boxRandom', 'boxRain', 'boxRainReverse', 'boxRainGrow', 'boxRainGrowReverse');
		}
		$pageTS = BackendUtility::getPagesTSconfig($config['row']['pid']);
		$imagecycleEffects = GeneralUtility::trimExplode(',', $pageTS['mod.']['imagecycle.']['effectsNivo'], true);
		$optionList = array();
		if (is_array($imagecycleEffects) && count($imagecycleEffects) > 0) {
			foreach ($availableEffects as $key => $availableEffect) {
				if (in_array(trim($availableEffect), $imagecycleEffects)) {
					$optionList[] = array(
						trim($availableEffect),
						trim($availableEffect),
					);
				}
			}
		} else {
			foreach ($availableEffects as $key => $availableEffect) {
				$optionList[] = array(
					trim($availableEffect),
					trim($availableEffect),
				);
			}
		}
		if (isset($config['items']) && is_array($config['items'])) {
			$config['items'] = array_merge($config['items'], $optionList);
		}
		return $config;
	}

	/**
	* Get defined Skin for dropdown
	* @return array
	*/
	public function getThemesNivo($config, $item)
	{
        $languageSubpath = '/Resources/Private/Language/';
        $extensionConfiguration = GeneralUtility::makeInstance(
            ExtensionConfiguration::class
        )->get($this->extensionKey);
		if (! is_dir(GeneralUtility::getFileAbsFileName($extensionConfiguration['nivoThemeFolder']))) {
			// if the defined folder does not exist, define the default folder
			GeneralUtility::devLog('Path \''.$extensionConfiguration['nivoThemeFolder'].'\' does not exist', $this->extensionKey, 1);
			$extensionConfiguration['nivoThemeFolder'] = 'EXT:' $this->extensionKey . '/res/css/nivoslider/';
		}

		// get the selected item
		$configPi = array();
		if (! is_array($config['row']['pi_flexform']) && $config['row']['pi_flexform'])	{
			$configPi = GeneralUtility::xml2array($config['row']['pi_flexform']);
			if (! is_array($configPi)) {
				$configPi = array();
			}
		}
		$theme = 'default';
		if (isset($configPi['data']['settings']['lDEF']['nivoTheme']['vDEF'])) {
			$theme = $configPi['data']['settings']['lDEF']['nivoTheme']['vDEF'];
		}

		// 
		$info_text = null;
		if (file_exists(GeneralUtility::getFileAbsFileName($extensionConfiguration['nivoThemeFolder'] . $theme . '/readme.txt'))) {
			$info_text = $GLOBALS['LANG']->sL(file_get_contents(GeneralUtility::getFileAbsFileName($extensionConfiguration['nivoThemeFolder'] . $theme . '/readme.txt')));
			$queue = GeneralUtility::makeInstance(FlashMessageQueue::class);
			$message = GeneralUtility::makeInstance(FlashMessage::class, $info_text, $GLOBALS['LANG']->sL('LLL:EXT:' . $this->extensionKey . $languageSubpath . 'locallang.xlf:pi3_theme_info'), FlashMessage::INFO);
			$queue->addMessage($message);
		}

		$items = GeneralUtility::get_dirs(GeneralUtility::getFileAbsFileName($extensionConfiguration['nivoThemeFolder']));
		if (is_array($items) && count($items) > 0) {
			$optionList = array();
			foreach ($items as $key => $item) {
				$item = trim($item);
				if (! preg_match('/^\./', $item)) {
					if (file_exists(GeneralUtility::getFileAbsFileName($extensionConfiguration['nivoThemeFolder']) . $item . '/style.css')) {
						$optionList[] = array(
							$item,
							$item,
						);
					}
				}
			}
			if (isset($config['items']) && is_array($config['items'])) {
				$config['items'] = array_merge($config['items'], $optionList);
			}
		}
		return $config;
	}

	/**
	 * Get all modes for image selection
	 * @return array
	 */
	public function getModes($config, $item)
	{
		$optionList = array();
		$optionList[] = array(
			$GLOBALS['LANG']->sL('LLL:EXT:' . $this->extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.pi_flexform.mode.I.upload'),
			'upload',
			'EXT:' . $this->extensionKey . '/Resources/Public/Icons/mode_upload.gif'
		);
		if ($config['config']['displayMode'] != 'page') {
			$optionList[] = array(
				$GLOBALS['LANG']->sL('LLL:EXT:' . $this->extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.pi_flexform.mode.I.rte'),
				'uploadRTE',
				'EXT:' $this->extensionKey . '/Resources/Public/Icons/mode_rte.gif'
			);
			$optionList[] = array(
				$GLOBALS['LANG']->sL('LLL:EXT:' . $this->extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.pi_flexform.mode.I.data'),
				'uploadData',
				'EXT:' . $this->extensionKey . '/Resources/Public/Icons/mode_data.gif'
			);
		}
		if (isset($config['items']) && is_array($config['items'])) {
			$config['items'] = array_merge($config['items'], $optionList);
		}
		return $config;
	}
}
