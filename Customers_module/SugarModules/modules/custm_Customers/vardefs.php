<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['custm_Customers'] = array(
    'table' => 'custm_customers',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'address_map' => 
  array (
    'required' => false,
    'name' => 'address_map',
    'vname' => 'LBL_ADDRESS_MAP',
    'type' => 'iframe',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'pii' => false,
    'default' => 'https://www.google.com/maps/embed/v1/place?key=AIzaSyCDEVWX004rbNK8n6leAlbYbbEyCGhzmk0&q={primary_address_street},{primary_address_city},{primary_address_country}',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'dbType' => 'varchar',
    'gen' => '1',
    'link_target' => '200',
    'height' => '200',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('custm_Customers','custm_Customers', array('basic','team_security','assignable','taggable','person'));