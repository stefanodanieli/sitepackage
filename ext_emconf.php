<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PolitecnicoDiMilano\\Sitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Stefano Danieli',
    'author_email' => 'stefano.danieli@polimi.it',
    'author_company' => 'Politecnico di Milano',
    'version' => '1.0.0',
];
