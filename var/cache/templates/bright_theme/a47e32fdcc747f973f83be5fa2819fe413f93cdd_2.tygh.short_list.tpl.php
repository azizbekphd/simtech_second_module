<?php
/* Smarty version 4.1.0, created on 2022-12-08 09:17:49
  from '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/blocks/product_list_templates/short_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6391818d5d3233_15222819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47e32fdcc747f973f83be5fa2819fe413f93cdd' => 
    array (
      0 => '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/blocks/product_list_templates/short_list.tpl',
      1 => 1670479970,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/compact_list.tpl' => 2,
  ),
),false)) {
function content_6391818d5d3233_15222819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/azizbekphd/Projects/php/cs-shop.devel/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_name'=>true,'show_sku'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>true,'show_add_to_cart'=>(($tmp = $_smarty_tpl->tpl_vars['show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp),'but_role'=>"action",'hide_form'=>true,'hide_qty_label'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/short_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/short_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/compact_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show_name'=>true,'show_sku'=>true,'show_price'=>true,'show_old_price'=>true,'show_clean_price'=>true,'show_add_to_cart'=>(($tmp = $_smarty_tpl->tpl_vars['show_add_to_cart']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp),'but_role'=>"action",'hide_form'=>true,'hide_qty_label'=>true,'show_product_labels'=>false,'show_discount_label'=>false,'show_shipping_label'=>false), 0, true);
}
}
}
