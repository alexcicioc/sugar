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
    'description' => 'Adds click to call button in the footer',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Click to call footer button',
    'published_date' => '2019-05-29 20:45:04',
    'type' => 'module',
    'version' => '1212121',
);

$installdefs = array(
    'id' => 'package_1212121',
    'copy' => array(
        array(
            'from' => '<basepath>/Files/addClickToCallAction.php',
            'to' => 'custom/Extension/application/Ext/clients/base/layouts/footer/addClickToCallAction.php',
        ),
        array(
            'from' => '<basepath>/Files/click-to-call.js',
            'to' => 'custom/clients/base/views/click-to-call/click-to-call.js',
        ),
        array(
            'from' => '<basepath>/Files/click-to-call.hbs',
            'to' => 'custom/clients/base/views/click-to-call/click-to-call.hbs',
        ),
    )
);

