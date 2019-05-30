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
    'description' => 'Installs account record view refresh buttons',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Account record view refresh buttons',
    'published_date' => '2019-05-29 20:45:04',
    'type' => 'module',
    'version' => '1391607505',
);

$installdefs = array(
    'id' => 'package_1559137575',
    'language' => array(
        array(
            'from' => '<basepath>/Files/en_us.refreshButtons.php',
            'to_module' => 'Accounts',
            'language' => 'en_us'
        ),
    ),
    'copy' => array(
        array(
            'from' => '<basepath>/Files/refreshButtons.php',
            'to' => 'custom/Extension/modules/Accounts/Ext/clients/base/views/record/refreshButtons.php',
        ),
        array(
            'from' => '<basepath>/Files/record.js',
            'to' => 'custom/modules/Accounts/clients/base/views/record/record.js',
        ),
    )
);

