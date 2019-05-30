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
    'description' => 'Validate zip code button',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Validate zip code button',
    'published_date' => '2019-05-29 20:45:04',
    'type' => 'module',
    'version' => '1392667705',
);

$installdefs = array(
    'id' => 'package_152545423',
    'language' => array(
        array(
            'from' => '<basepath>/Files/en_us.ZipCodeCheckButton.php',
            'to_module' => 'Contacts',
            'language' => 'en_us'
        ),
    ),
    'copy' => array(
        array(
            'from' => '<basepath>/Files/addZipCodeCheckButton.php',
            'to' => 'custom/Extension/modules/Contacts/Ext/clients/base/views/record/addZipCodeCheckButton.php',
        ),
        array(
            'from' => '<basepath>/Files/record.js',
            'to' => 'custom/modules/Contacts/clients/base/views/record/record.js',
        ),
    )
);

