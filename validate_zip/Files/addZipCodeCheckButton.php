
<?php

//module name
$module = 'Contacts';

//buttons to append
$addButtons = array(
    array(
        'type' => 'divider',
    ),
    array (
        'type' => 'rowaction',
        'event' => 'button:zipcode_check:click',
        'name' => 'zipcode_check_button',
        'label' => 'LBL_ZIPCODE_CHECK_BUTTON_LABEL',
        'acl_action' => 'view',
        'zip_code_field' => 'primary_address_postalcode',
        'city_field' => 'primary_address_city'
    )
);

//if the buttons are missing in our base modules metadata, include core buttons
if (!isset($viewdefs[$module]['base']['view']['record']['buttons']))
{
    require('clients/base/views/record/record.php');
    $viewdefs[$module]['base']['view']['record']['buttons'] = $viewdefs['base']['view']['record']['buttons'];
    unset($viewdefs['base']);
}

foreach($viewdefs[$module]['base']['view']['record']['buttons'] as $outerKey => $outerButton)
{
    if (
        isset($outerButton['type'])
        && $outerButton['type'] == 'actiondropdown'
        && isset($outerButton['name'])
        && $outerButton['name'] == 'main_dropdown'
        && isset($outerButton['buttons'])
    )
    {
        //appending buttons
        foreach ($addButtons as $addButton)
        {
            $viewdefs[$module]['base']['view']['record']['buttons'][$outerKey]['buttons'][]=$addButton;
        }
    }
}
