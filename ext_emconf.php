<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Securepoint - Job offers',
    'description' => 'Extension for job offers in TYPO3 sites.',
    'category' => 'plugin',
    'author' => 'Andreas Behrens',
    'author_email' => 'andreas.behrens@securepoint.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
