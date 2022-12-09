<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Registry;
use Tygh\Enum\ObjectStatuses;

function fn_settings_actions_addons_searchanise($new_status, $old_status)
{
    $class_loader = Tygh::$app['class_loader'];
    $class_loader->add('', Registry::get('config.dir.addons') . 'searchanise');

    if (fn_se_is_registered() == true) {
        if ($new_status === ObjectStatuses::ACTIVE) {
            fn_se_signup();
            fn_se_queue_import();
        }
    }

    return true;
}
