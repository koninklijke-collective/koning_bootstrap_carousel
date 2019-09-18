<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap carousel',
    'description' => 'Carousel with Bootstrap 3.* compliant HTML',
    'category' => 'plugin',
    'version' => '1.1.0',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Jesper Paardekooper,Benjamin Serfhos',
    'author_email' => 'jesper@koninklijk.io,benjamin@koninklijk.io',
    'author_company' => 'Koninklijke Collective',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Keizer\\KoningBootstrapCarousel\\' => 'Classes',
        ],
    ],
];
