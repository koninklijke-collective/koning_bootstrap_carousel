<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

return [
    'ctrl' => [
        'title' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide',
        'label' => 'title',
        'hideAtCopy' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'dividers2tabs' => true,
        'hideTable' => true,
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'searchFields' => 'uid, title, description',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'typeicon_classes' => [
            'default' => 'tcarecords-koning_bootstrap_carousel-slide-default',
        ],
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, title, link, link_text, description, visual, visual_size, visual_position',
    ],
    'types' => [
        0 => [
            'showitem' => 'title, --palette--;;access, --palette--;;link, description, --palette--;;visual,',
        ],
    ],
    'palettes' => [
        'access' => [
            'showitem' => 'hidden, starttime, endtime',
        ],
        'link' => [
            'showitem' => 'link, link_text',
        ],
        'visual' => [
            'showitem' => 'visual, --linebreak--, visual_size, visual_position',
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
            ],
        ],
        'title' => [
            'exclude' => false,
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.title',
            'config' => [
                'type' => 'text',
                'eval' => 'trim, required',
                'size' => 30,
            ],
        ],
        'link' => [
            'exclude' => false,
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 20,
                'max' => 1024,
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
                        ],
                    ],
                ],
                'softref' => 'typolink',
            ],
        ],
        'link_text' => [
            'exclude' => false,
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.link_text',
            'config' => [
                'type' => 'input',
                'size' => 30,
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
            ],
        ],
        'visual' => [
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual',
            'config' => ExtensionManagementUtility::getFileFieldTCAConfig(
                'visual',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
                    ],
                    'minitems' => 1,
                    'maxitems' => 1,
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'visual_size' => [
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size',
            'config' => [
                'type' => 'select',
                'items' => [
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size.cover',
                        'cover',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_size.contain',
                        'contain',
                    ],
                ],
            ],
        ],
        'visual_position' => [
            'label' => 'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position',
            'config' => [
                'type' => 'select',
                'items' => [
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-top',
                        'left-top',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-center',
                        'left-center',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.left-bottom',
                        'left-bottom',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-top',
                        'right-top',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-center',
                        'right-center',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.right-bottom',
                        'right-bottom',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-top',
                        'center-top',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-center',
                        'center-center',
                    ],
                    [
                        'LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:tx_koningbootstrapcarousel_domain_model_slide.visual_position.center-bottom',
                        'center-bottom',
                    ],
                ],
            ],
        ],
    ],
];
