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
    'description' => 'Capitalize contacts name before save',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Capitalize contacts name before save',
    'published_date' => '2019-05-29 20:45:04',
    'type' => 'module',
    'version' => '1391607705',
);

$installdefs = array(
    'id' => 'package_1391607705',
    'copy' => array(
        array(
            'from' => '<basepath>/Files/CapitalizeName.php',
            'to' => 'custom/modules/Contacts/CapitalizeName.php'
        ),
    ),
    'logic_hooks' => array(
        array(
            'module' => 'Contacts',
            'hook' => 'before_save',
            'order' => 1,
            'description' => 'Capitalize name',
            'file' => 'custom/modules/Contacts/CapitalizeName.php',
            'class' => 'CapitalizeName',
            'function' => 'changeName',
        )
    )
);

