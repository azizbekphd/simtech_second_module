<?php
/* Smarty version 4.1.0, created on 2022-12-08 11:19:30
  from '/Users/azizbekphd/Projects/php/cs-shop.devel/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63919e12c6e706_27029138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58eaded6e6c21304bd3f0da372aabf9838cf096a' => 
    array (
      0 => '/Users/azizbekphd/Projects/php/cs-shop.devel/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1665485908,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63919e12c6e706_27029138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/azizbekphd/Projects/php/cs-shop.devel/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }
}
}
