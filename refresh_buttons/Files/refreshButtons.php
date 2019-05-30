<?php

//module name
$module = 'Accounts';

//buttons to append
$addButtons = array(
    array(
        'type' => 'divider',
    ),
    array (
        'type' => 'rowaction',
        'event' => 'button:refresh_specific_subpanel:click',
        'name' => 'refresh_specific_subpanel',
        'label' => 'LBL_REFRESH_SPECIFIC_SUBPANEL',
        'acl_action' => 'view',
    ),
    array (
        'type' => 'rowaction',
        'event' => 'button:refresh_all_subpanels:click',
        'name' => 'refresh_all_subpanels',
        'label' => 'LBL_REFRESH_ALL_SUBPANELS',
        'acl_action' => 'view',
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
