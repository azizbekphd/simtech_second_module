<?php

$schema['departments.update'] = array(
    'func' => array('fn_get_department_name', '@department_id'),
    'text' => 'departments'
);

return $schema;
