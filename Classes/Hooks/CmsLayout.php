<?php

namespace Typo3Extension\Imagecycle\Hooks;

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

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;


/**
 * 'cms_layout' for the 'imagecycle' extension.
 *
 * @author     Juergen Furrer <juergen.furrer@gmail.com>
 * @package    TYPO3
 * @subpackage tx_imagecycle
 */
class CmsLayout
{
	/**
	 * Returns information about this extension's pi1 plugin
	 *
	 * @param  array  $params Parameters to the hook
	 * @param  object $pObj   A reference to calling object
	 * @return string Information about pi1 plugin
	 */
	function getExtensionSummary($params, &$pObj)
	{
        $languageSubpath = '/Resources/Private/Language/';
		$result = null;
		$data = GeneralUtility::xml2array($params['row']['pi_flexform']);
		if (! is_array($data)) {
			$result = $GLOBALS['LANG']->sL('LLL:EXT:imagecycle' . $languageSubpath . 'locallang.xlf:cms_layout.not_configured') . '<br/>';
		} else {
			switch ($params['row']['list_type']) {
				case 'imagecycle_pi1' : {
					$type   = 'jQuery Cycle (' . ($data['data']['movement']['lDEF']['type']['vDEF'] ? implode(', ', GeneralUtility::trimExplode(',', $data['data']['movement']['lDEF']['type']['vDEF'])) : $GLOBALS['LANG']->sL('LLL:EXT:imagecycle' . $languageSubpath . 'locallang.xlf:cms_layout.from_ts')) . ')';
					$result = sprintf($GLOBALS['LANG']->sL('LLL:EXT:imagecycle' . $languageSubpath . 'locallang.xlf:cms_layout.style'), '<strong>'.$type.'</strong><br/>');
					break;
				}
				case 'imagecycle_pi2' : {
					$type   = 'Coin-Slider (' . ($data['data']['settings']['lDEF']['coinEffect']['vDEF'] ? $data['data']['settings']['lDEF']['coinEffect']['vDEF'] : $GLOBALS['LANG']->sL('LLL:EXT:imagecycle' . $languageSubpath . 'locallang.xlf:cms_layout.from_ts')) . ')';
					$result = sprintf($GLOBALS['LANG']->sL('LLL:EXT:imagecycle' . $languageSubpath . 'locallang.xlf:cms_layout.style'), '<strong>'.$type.'</strong><br/>');
					break;
				}
				case 'imagecycle_pi3' : {
					$type   = 'Nivo-Slider (' . ($data['data']['settings']['lDEF']['nivoEffect']['vDEF'] ? implode(', ', GeneralUtility::trimExplode(',', $data['data']['settings']['lDEF']['nivoEffect']['vDEF'])) : $GLOBALS['LANG']->sL('LLL:EXT:imagecycle' . $languageSubpath . 'locallang.xlf:cms_layout.from_ts')) . ')';
					$result = sprintf($GLOBALS['LANG']->sL('LLL:EXT:imagecycle' . $languageSubpath . 'locallang.xlf:cms_layout.style'), '<strong>' . $type . '</strong><br/>');
					break;
				}
				case 'imagecycle_pi4' : {
					$type   = 'Cross-Slide';
					$result = sprintf($GLOBALS['LANG']->sL('LLL:EXT:imagecycle' . $languageSubpath . 'locallang.xlf:cms_layout.style'), '<strong>' . $type . '</strong><br/>');
					break;
				}
			}
		}
		if (ExtensionManagementUtility::isLoaded('templavoila')) {
			$result = strip_tags($result);
		}
		return $result;
	}
}
