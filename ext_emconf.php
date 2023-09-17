<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Plate Layout Ces',
    'description' => 'Plate Layout Ces - Provide a set of Layout contentelements',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Kolya von Droste zu Vischering',
    'author_email' => 'jasker@dipool-web.de',
    'author_company' => 'AtomicPlan',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.5.99',
            'plate_atomic_assets' => '1.0.0-1.99',
            'menus' => '0.3.0-0.3.99',
        ]
    ]
];
