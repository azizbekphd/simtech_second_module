<?php
/* Smarty version 4.1.0, created on 2022-12-08 09:17:48
  from '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/addons/gdpr/hooks/social_buttons/pinterest.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6391818c633b87_16060045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81780ee5237bf252dca41ba46d9d8bab16e696f6' => 
    array (
      0 => '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/addons/gdpr/hooks/social_buttons/pinterest.pre.tpl',
      1 => 1670479994,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6391818c633b87_16060045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/azizbekphd/Projects/php/cs-shop.devel/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (($_smarty_tpl->tpl_vars['addons']->value['gdpr']['gdpr_cookie_consent'] !== "none")) {
$_smarty_tpl->_assignInScope('script_attrs', array("type"=>"text/plain","data-type"=>"application/javascript","data-name"=>"pinterest") ,false ,2);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/social_buttons/pinterest.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/hooks/social_buttons/pinterest.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (($_smarty_tpl->tpl_vars['addons']->value['gdpr']['gdpr_cookie_consent'] !== "none")) {
$_smarty_tpl->_assignInScope('script_attrs', array("type"=>"text/plain","data-type"=>"application/javascript","data-name"=>"pinterest") ,false ,2);
}
}
}
}
