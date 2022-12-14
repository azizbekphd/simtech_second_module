<?php
/*
* © 2022 CS-Cart.ie
* 
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  
* IN  THE "LICENSE.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE. 
* 
 * @website: www.cs-cart.ie
*  
*/

if ( !defined('BOOTSTRAP') ) { die('Access denied'); }

use Tygh\Registry;

function fn_get_departments($params = array(), $lang_code = CART_LANGUAGE, $items_per_page = 0)
{
    $default_params = array(
        'page' => 1,
        'items_per_page' => $items_per_page
    );

    $params = array_merge($default_params, $params);

    if (AREA == 'C') {
        $params['status'] = 'A';
    }

    $sortings = array(
        'timestamp' => '?:departments.timestamp',
        'name' => '?:department_names.name',
        'description' => '?:department_description.description',
        'status' => '?:departments.status',
    );

    $condition = $limit = $join = '';

    if (!empty($params['limit'])) {
        $limit = db_quote(' LIMIT 0, ?i', $params['limit']);
    }

    $sorting = db_sort($params, $sortings, 'name', 'asc');

    if (!empty($params['name'])) {
        $condition .= db_quote(' AND ?:department_names.name LIKE ?l', '%' . trim($params['name']) . '%');
    }

    if (!empty($params['status'])) {
        $condition .= db_quote(' AND ?:departments.status = ?s', $params['status']);
    }

    $fields = array (
        '?:departments.department_id',
        '?:departments.supervisor_id',
        '?:departments.status',
        '?:departments.timestamp',
        '?:department_names.name',
        '?:department_descriptions.description',
    );

    $join .= db_quote(' LEFT JOIN ?:department_names ON ?:department_names.name_id = ?:departments.department_id AND ?:department_names.lang_code = ?s', $lang_code);
    $join .= db_quote(' LEFT JOIN ?:department_descriptions ON ?:department_descriptions.department_id = ?:departments.department_id AND ?:department_descriptions.lang_code = ?s', $lang_code);

    if (!empty($params['items_per_page'])) {
        $params['total_items'] = db_get_field("SELECT COUNT(*) FROM ?:departments $join WHERE 1 $condition");
        $limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
    }

    $departments = db_get_hash_array(
        "SELECT ?p FROM ?:departments " .
        $join .
        "WHERE 1 ?p ?p ?p",
        'department_id', implode(', ', $fields), $condition, $sorting, $limit
    );

    return array($departments, $params);
}
