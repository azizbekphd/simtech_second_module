<?php

$schema['departments'] = array (
    'permissions' => 'manage_departments',
    'modes' => array(
        'update' => array(
            'permissions' => array(
                'GET' => 'view_departments',
                'POST' => 'manage_departments'
            ),
        ),
        'manage' => array(
            'permissions' => 'view_departments',
        ),
        'picker' => array(
            'permissions' => 'view_departments',
        ),
    ),
);
$schema['tools']['modes']['update_status']['param_permissions']['table']['departments'] = 'manage_departments';

return $schema;
