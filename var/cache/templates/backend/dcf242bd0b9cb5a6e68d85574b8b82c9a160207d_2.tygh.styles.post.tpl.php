<?php
/* Smarty version 4.1.0, created on 2022-12-08 11:19:30
  from '/Users/azizbekphd/Projects/php/cs-shop.devel/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63919e12cba730_45110705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf242bd0b9cb5a6e68d85574b8b82c9a160207d' => 
    array (
      0 => '/Users/azizbekphd/Projects/php/cs-shop.devel/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1665485909,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63919e12cba730_45110705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/azizbekphd/Projects/php/cs-shop.devel/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }
}
}
