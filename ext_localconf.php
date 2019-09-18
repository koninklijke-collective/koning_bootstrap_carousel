<?php
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tcarecords-koning_bootstrap_carousel-slide-default',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:koning_bootstrap_carousel/Resources/Public/Icons/tcarecords-koning_bootstrap_carousel-slide-default.svg']
);
$iconRegistry->registerIcon(
    'wizard-koning_bootstrap_carousel',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:koning_bootstrap_carousel/Resources/Public/Icons/wizard-koning_bootstrap_carousel.svg']
);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Keizer.' . 'koning_bootstrap_carousel',
    'Show',
    ['Carousel' => 'show']
);

// Add plugin to new content element wizard
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    mod.wizards.newContentElement.wizardItems.plugins {
        elements.koning_bootstrap_carousel {
            iconIdentifier = wizard-koning_bootstrap_carousel
            title = LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:plugin.title
            description = LLL:EXT:koning_bootstrap_carousel/Resources/Private/Language/locallang_be.xlf:plugin.description
            tt_content_defValues {
                CType = list
                list_type = koningbootstrapcarousel_show
            }
        }
    }
');
