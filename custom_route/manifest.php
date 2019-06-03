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
    'description' => 'Creates #helloWorld route',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Hello world route',
    'published_date' => '2019-05-29 21:45:04',
    'type' => 'module',
    'version' => '56465',
);

$installdefs = array(
    'id' => 'package_56465',
    'copy' => array(
        array(
            'from' => '<basepath>/Files/customRoute.js',
            'to' => 'custom/javascript/customRoutes.js',
        ),
    )
);

