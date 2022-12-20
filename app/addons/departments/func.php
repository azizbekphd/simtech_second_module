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
use Tygh\Languages\Languages;
use Tygh\Tools\SecurityHelper;

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

//
// Get specific department data
//
function fn_get_department_data($department_id, $lang_code = CART_LANGUAGE)
{
    // Unset all SQL variables
    $fields = $joins = array();
    $condition = '';

    $fields = array (
        '?:departments.department_id',
        '?:departments.status',
        '?:department_names.name',
        '?:departments.timestamp',
        '?:departments.upd_timestamp',
        '?:departments.supervisor_id',
        '?:department_descriptions.description',
        '?:department_images.department_image_id',
    );

    $joins[] = db_quote("LEFT JOIN ?:department_names ON ?:department_names.department_id = ?:departments.department_id AND ?:department_names.lang_code = ?s", $lang_code);
    $joins[] = db_quote("LEFT JOIN ?:department_descriptions ON ?:department_descriptions.department_id = ?:departments.department_id AND ?:department_descriptions.lang_code = ?s", $lang_code);
    $joins[] = db_quote("LEFT JOIN ?:department_employee ON ?:department_employee.department_id = ?:departments.department_id");
    $joins[] = db_quote("LEFT JOIN ?:department_images ON ?:department_images.department_id = ?:departments.department_id AND ?:department_images.lang_code = ?s", $lang_code);

    $condition = db_quote("WHERE ?:departments.department_id = ?i", $department_id);
    $condition .= (AREA == 'A') ? '' : " AND ?:departments.status IN ('A', 'H') ";

    $department = db_get_row("SELECT " . implode(", ", $fields) . " FROM ?:departments " . implode(" ", $joins) ." $condition");

    if (!empty($department)) {
        $department['main_pair'] = fn_get_image_pairs($department['department_image_id'], 'promo', 'M', true, false, $lang_code);
    }


    return $department;
}

/**
 * Checks of request for need to update the department image.
 *
 * @return bool
 */
function fn_departments_need_image_update()
{
    if (!empty($_REQUEST['file_departments_main_image_icon']) && is_array($_REQUEST['file_departments_main_image_icon'])) {
        $image_department = reset($_REQUEST['file_departments_main_image_icon']);

        if ($image_department == 'departments_main') {
            return false;
        }
    }

    return true;
}

function fn_departments_update_department($data, $department_id, $lang_code = DESCR_SL)
{
    SecurityHelper::sanitizeObjectData('department', $data);

    if (isset($data['timestamp'])) {
        $data['timestamp'] = fn_parse_date($data['timestamp']);
    }

    $data['localization'] = empty($data['localization']) ? '' : fn_implode_localizations($data['localization']);

    if (!empty($department_id)) {
        db_query("UPDATE ?:departments SET ?u WHERE department_id = ?i", $data, $department_id);
        db_query("UPDATE ?:department_descriptions SET ?u WHERE department_id = ?i AND lang_code = ?s", $data, $department_id, $lang_code);

        $department_image_id = fn_get_department_image_id($department_id, $lang_code);
        $department_image_exist = !empty($department_image_id);
        $department_is_multilang = Registry::get('addons.departments.department_multilang') == 'Y';
        $image_is_update = fn_departments_need_image_update();

        if ($department_is_multilang) {
            if ($department_image_exist && $image_is_update) {
                fn_delete_image_pairs($department_image_id, 'promo');
                db_query("DELETE FROM ?:department_images WHERE department_id = ?i AND lang_code = ?s", $department_id, $lang_code);
                $department_image_exist = false;
            }
        } else {
            if (isset($data['url'])) {
                db_query("UPDATE ?:department_descriptions SET url = ?s WHERE department_id = ?i", $data['url'], $department_id);
            }
        }

        if ($image_is_update && !$department_image_exist) {
            $department_image_id = db_query("INSERT INTO ?:department_images (department_id, lang_code) VALUE(?i, ?s)", $department_id, $lang_code);
        }
        $pair_data = fn_attach_image_pairs('departments_main', 'promo', $department_image_id, $lang_code);

        if (!$department_is_multilang && !$department_image_exist) {
            fn_departments_image_all_links($department_id, $pair_data, $lang_code);
        }

    } else {
        $department_id = $data['department_id'] = db_query("REPLACE INTO ?:departments ?e", $data);

        foreach (Languages::getAll() as $data['lang_code'] => $v) {
            db_query("REPLACE INTO ?:department_descriptions ?e", $data);
        }

        if (fn_departments_need_image_update()) {
            $department_image_id = db_get_next_auto_increment_id('department_images');
            $pair_data = fn_attach_image_pairs('departments_main', 'promo', $department_image_id, $lang_code);
            if (!empty($pair_data)) {
                $data_department_image = array(
                    'department_image_id' => $department_image_id,
                    'department_id'       => $department_id,
                    'lang_code'       => $lang_code
                );

                db_query("INSERT INTO ?:department_images ?e", $data_department_image);
                fn_departments_image_all_links($department_id, $pair_data, $lang_code);
            }
        }
    }

    return $department_id;
}

function fn_departments_image_all_links($department_id, $pair_data, $main_lang_code = DESCR_SL)
{
    if (!empty($pair_data)) {
        $pair_id = reset($pair_data);

        $lang_codes = Languages::getAll();
        unset($lang_codes[$main_lang_code]);

        foreach ($lang_codes as $lang_code => $lang_data) {
            $_department_image_id = db_query("INSERT INTO ?:department_images (department_id, lang_code) VALUE(?i, ?s)", $department_id, $lang_code);
            fn_add_image_link($_department_image_id, $pair_id);
        }
    }
}

function fn_get_department_image_id($department_id, $lang_code = DESCR_SL)
{
    return db_get_field("SELECT department_image_id FROM ?:department_images WHERE department_id = ?i AND lang_code = ?s", $department_id, $lang_code);
}