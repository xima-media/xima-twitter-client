<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Twitter client',
    'description' => 'Download and display tweets from Twitter',
    'category' => 'plugin',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Xima\\XimaTwitterClient\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'author' => 'Maik Schneider',
    'author_email' => 'maik.schneider@xima.de',
    'author_company' => 'XIMA Media GmbH',
    'version' => '2.0.0',
];
