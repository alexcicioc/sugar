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
    'description' => 'Hide calls subpanel if there\'s no phone number',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Hide calls subpanel',
    'published_date' => '2019-05-29 21:45:04',
    'type' => 'module',
    'version' => '1559137576',
);

$installdefs = array(
    'id' => 'package_1559137576',
    'copy' => array(
        array(
            'from' => '<basepath>/Files/subpanel.js',
            'to' => 'custom/modules/Contacts/clients/base/layouts/subpanels/subpanel.js',
        ),
    )
);

