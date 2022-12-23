<?php

use Tygh\Tools\SecurityHelper;

$schema['department'] = array(
    SecurityHelper::SCHEMA_SECTION_FIELD_RULES => array(
        'name' => SecurityHelper::ACTION_REMOVE_HTML,
        'description' => SecurityHelper::ACTION_SANITIZE_HTML,
    )
);

return $schema;
