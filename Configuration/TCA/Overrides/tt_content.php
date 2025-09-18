<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

$ll = 'LLL:EXT:ot_sitekitcetextmedia/Resources/Private/Language/locallang_db.xlf:';

$GLOBALS['TCA']['tt_content']['types']['ot_sitekitcetextmedia']['columnsOverrides'] = [
    'bodytext' => [
        'config' => [
            'enableRichtext' => true,
        ],
    ],
    'ot_layout' => [
        'label' => $ll . 'tt_content.ot_layout',
        'config' => [
            'items' => [
                [
                    'label' => $ll . 'tt_content.ot_layout.50-text-50-media',
                    'value' => '50-text-50-media',
                ],
                [
                    'label' => $ll . 'tt_content.ot_layout.50-media-50-text',
                    'value' => '50-media-50-text',
                ],
                [
                    'label' => $ll . 'tt_content.ot_layout.100-media-100-text',
                    'value' => '100-media-100-text',
                ],
            ],
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['types']['ot_sitekitcetextmedia']['showitem'] = '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        --palette--;;headers, bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
        --palette--;LLL:EXT:ot_irrebuttons/Resources/Private/Language/locallang_be.xlf:tx_otirrebuttons.palette.label;irreButtons,
        tx_otirrebuttons_domain_model_buttons,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:media,
        --palette--;;ot-crop-variants,assets,ot_layout,
        --palette--;;imagelinks,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
    --palette--;;language,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => $ll . 'tt_content.CType.label',
        'description' => $ll . 'tt_content.CType.description',
        'value' => 'ot_sitekitcetextmedia',
        'icon' => 'content-textmedia',
        'group' => 'default',
    ],
    'text',
    'before'
);
