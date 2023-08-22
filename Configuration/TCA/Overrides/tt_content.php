<?php
defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(function($extensionKey, $table)
{
    $relativeImagePath = 'EXT:' . $extensionKey . '/Resources/Public/Icons/'; 

    // CONTENT
    $tempColumns = array(
        'tx_imagecycle_activate' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '.tx_imagecycle_activate',
            'config' => array(
                'type' => 'check',
            )
        ),
        'tx_imagecycle_duration' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '.tx_imagecycle_duration',
            'config' => array(
                'type' => 'input',
                'size' => '5',
                'trim' => 'int',
                'default' => '6000'
            )
        ),
    );

    ExtensionManagementUtility::addTCAcolumns($table, $tempColumns);
    $GLOBALS['TCA'][$table]['palettes']['tx_imagecycle'] = array(
        'showitem' => 'tx_imagecycle_activate,tx_imagecycle_duration',
        'canNotCollapse' => 1,
    );
    ExtensionManagementUtility::addToAllTCAtypes($table, '--palette--;LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '.tx_imagecycle_title;tx_imagecycle', 'textpic,image', 'before:imagecaption');

    $listType = 'imagecycle_pi1';

    // ICON pi1
    ExtensionManagementUtility::addPlugin(
        array(
            'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '.list_type_pi1',
            $listType,
            $relativeImagePath . 'Pi1/ce_icon.gif'
        ),
        'list_type',
        $extensionKey
    );

    ExtensionManagementUtility::addPiFlexFormValue(
        $listType,
        'FILE:EXT:' . $extensionKey . '/pi1/flexform_ds.xml'
    );

    $listType = 'imagecycle_pi2';

    // ICON pi2
    ExtensionManagementUtility::addPlugin(
        array(
            'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '.list_type_pi2', 
            $listType,
            $relativeImagePath . 'Pi2/ce_icon.gif'
        ),
        'list_type',
        $extensionKey
    );
    ExtensionManagementUtility::addPiFlexFormValue(
        $listType,
        'FILE:EXT:' . $extensionKey . '/pi2/flexform_ds.xml'
    );

    $listType = 'imagecycle_pi3';

    // ICON pi3
    ExtensionManagementUtility::addPlugin(
        array(
            'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '.list_type_pi3',
            $listType,
            $relativeImagePath . 'Pi3/ce_icon.gif'
        ),
        'list_type',
        $extensionKey
    );
    ExtensionManagementUtility::addPiFlexFormValue(
        $listType, 
        'FILE:EXT:' . $extensionKey . '/pi3/flexform_ds.xml'
    );

    $listType = 'imagecycle_pi4';

    // ICON pi4
    ExtensionManagementUtility::addPlugin(
        array(
            'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '.list_type_pi4',
            $listType,
            $relativeImagePath . 'Pi4/ce_icon.gif'
        ),
        'list_type',
        $extensionKey
    );
    ExtensionManagementUtility::addPiFlexFormValue(
        $listType,
        'FILE:EXT:' . $extensionKey . '/pi4/flexform_ds.xml'
    );

    $listType = 'imagecycle_pi5';

    // ICON pi5
    ExtensionManagementUtility::addPlugin(
        array(
            'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:' . $table . '.list_type_pi5',
            $listType,
            $relativeImagePath . 'Pi5/ce_icon.gif'
        ),
        'list_type',
        $extensionKey
    );
    ExtensionManagementUtility::addPiFlexFormValue(
        $listType,
        'FILE:EXT:' . $extensionKey . '/pi5/flexform_ds.xml'
    );

    $GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist']['imagecycle_pi1'] = 'layout,pages';
    $GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist']['imagecycle_pi1']     = 'pi_flexform,image_zoom';

    $GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist']['imagecycle_pi2'] = 'layout,pages';
    $GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist']['imagecycle_pi2']     = 'pi_flexform,image_zoom';

    $GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist']['imagecycle_pi3'] = 'layout,pages';
    $GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist']['imagecycle_pi3']     = 'pi_flexform,image_zoom';

    $GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist']['imagecycle_pi4'] = 'layout,pages';
    $GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist']['imagecycle_pi4']     = 'pi_flexform,image_zoom';

    $GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist']['imagecycle_pi5'] = 'layout,pages';
    $GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist']['imagecycle_pi5']     = 'pi_flexform,image_zoom';
}, 'imagecycle', basename(__FILE__, '.php'));

