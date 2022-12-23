<?php

$schema['departments'] = array(
        'controller' => 'departments',
        'mode' => 'update',
        'type' => 'tpl_tabs',
        'params' => array(
            'object_id' => '@department_id',
            'object' => 'departments'
        ),
        'table' => array(
            'name' => 'departments',
            'key_field' => 'department_id',
        ),
        'request_object' => 'department_data',
        'have_owner' => true,
);

return $schema;
