<?php

$manifest = array(
    'acceptable_sugar_flavors' => array('CE', 'PRO', 'CORP', 'ENT', 'ULT'),
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(),
        'regex_matches' => array(
            6 => '8\\.(.*?)',
            7 => '9\\.(.*?)',
        ),
    ),
    'author' => 'Alex Cicioc',
    'description' => 'Changes the quick search wait time to 5 seconds',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => '5 second quick search',
    'published_date' => '2019-05-29 20:45:04',
    'type' => 'module',
    'version' => '3213213',
);

$installdefs = array(
    'id' => 'package_3213213',
    'copy' => array(
        array(
            'from' => '<basepath>/Files/filter-quicksearch.js',
            'to' => 'custom/clients/base/views/filter-quicksearch/filter-quicksearch.js',
        ),
    )
);

