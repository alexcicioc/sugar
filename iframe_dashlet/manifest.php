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
    'description' => 'Destination CRM dashlet',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Destination CRM dashlet',
    'published_date' => '2019-05-29 21:45:04',
    'type' => 'module',
    'version' => '1619137576',
);

$installdefs = array(
    'id' => 'package_1619137576',
    'copy' => array(
        array(
            'from' => '<basepath>/Files/destinationcrm',
            'to' => 'custom/clients/base/views/destinationcrm',
        ),
    )
);

