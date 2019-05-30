<?php
$module_name = "Contacts";

$viewdefs[$module_name]['base']['filter']['salesDepartmentFilter'] = array(
    'create' => false,
    'filters' => array(
        array(
            'id' => 'salesDepartmentFilter',
            'name' => 'LBL_SALES_ONLY_FILTER',
            'filter_definition' => array(
                array(
                    'department' => 'Sales',
                ),
            ),
            'editable' => false,
        ),
    ),
);
