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
    'description' => 'Contacts list filter sales contacts',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Contacts list filter sales contacts',
    'published_date' => '2019-05-29 20:45:04',
    'type' => 'module',
    'version' => '1391607705',
);

$installdefs = array(
    'id' => 'package_1559137575',
    'language' => array(
        array(
            'from' => '<basepath>/Files/en_us.salesDepartmentFilter.php',
            'to_module' => 'Contacts',
            'language' => 'en_us'
        ),
    ),
    'copy' => array(
        array(
            'from' => '<basepath>/Files/salesDepartmentFilter.php',
            'to' => 'custom/modules/Contacts/clients/base/filters/salesDepartmentFilter/salesDepartmentFilter.php',
        ),
    )
);

