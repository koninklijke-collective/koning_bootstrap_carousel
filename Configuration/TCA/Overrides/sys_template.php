<?php
call_user_func(function (string $extension, string $table): void {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extension,
        'Configuration/TypoScript/',
        'Koning Bootstrap Carousel'
    );
}, 'koning_bootstrap_carousel', 'sys_template');
