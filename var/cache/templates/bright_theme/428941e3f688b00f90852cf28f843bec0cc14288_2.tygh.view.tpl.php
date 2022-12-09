<?php
/* Smarty version 4.1.0, created on 2022-12-08 09:20:09
  from '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/views/product_features/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63918219d9d9c0_20076295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '428941e3f688b00f90852cf28f843bec0cc14288' => 
    array (
      0 => '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/views/product_features/view.tpl',
      1 => 1670479971,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_63918219d9d9c0_20076295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/azizbekphd/Projects/php/cs-shop.devel/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products','text_no_products'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-feature">
    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <div class="ty-feature__image">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']), 0, false);
?>
    </div>
    <?php }?>
    <div class="ty-feature__description ty-wysiwyg-content">
        <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['url']) {?>
        <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></p>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['variant_data']->value['description'];?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));
if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0, true);
}
} else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
<?php }?>
<!--product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->tpl_vars['variant_data']->value['variant'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/product_features/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-feature">
    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <div class="ty-feature__image">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']), 0, true);
?>
    </div>
    <?php }?>
    <div class="ty-feature__description ty-wysiwyg-content">
        <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['url']) {?>
        <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></p>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['variant_data']->value['description'];?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->_assignInScope('layouts', fn_get_products_views('',false,0));
if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0, true);
}
} else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
<?php }?>
<!--product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->tpl_vars['variant_data']->value['variant'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
