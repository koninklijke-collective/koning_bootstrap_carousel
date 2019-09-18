<?php
call_user_func(function ($extension, $table): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        $extension,
        'Show',
        'LLL:EXT:' . $extension . '/Resources/Private/Language/locallang_be.xlf:plugin.title'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, [
        'koningbootstrapcarousel_slides' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:' . $extension . '/Resources/Private/Language/locallang_be.xlf:tt_content.koningbootstrapcarousel_slides',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_koningbootstrapcarousel_domain_model_slide',
                'foreign_field' => 'content_id',
                'foreign_sortby' => 'sorting',
                'maxitems' => '9999',
                'appearance' => [
                    'collapseAll' => true,
                ],
            ],
        ],
    ]);

    $GLOBALS['TCA'][$table]['types']['list']['subtypes_excludelist']['koningbootstrapcarousel_show'] = 'layout, select_key, pages';
    $GLOBALS['TCA'][$table]['types']['list']['subtypes_addlist']['koningbootstrapcarousel_show'] = 'pi_flexform, koningbootstrapcarousel_slides';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'koningbootstrapcarousel_show',
        'FILE:EXT:' . $extension . '/Configuration/FlexForm/Show.xml'
    );
}, 'koning_bootstrap_carousel', 'tt_content');
