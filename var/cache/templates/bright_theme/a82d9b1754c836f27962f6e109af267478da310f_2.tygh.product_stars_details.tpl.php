<?php
/* Smarty version 4.1.0, created on 2022-12-08 09:20:37
  from '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_stars_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63918235d6dec9_29385000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a82d9b1754c836f27962f6e109af267478da310f' => 
    array (
      0 => '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_stars_details.tpl',
      1 => 1670479991,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_reviews/views/product_reviews/components/product_star_line.tpl' => 2,
  ),
),false)) {
function content_63918235d6dec9_29385000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/azizbekphd/Projects/php/cs-shop.devel/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-stars-details">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ratings_stats']->value, 'rating', false, 'quantity');
$_smarty_tpl->tpl_vars['rating']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity']->value => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->do_else = false;
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_star_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quantity'=>$_smarty_tpl->tpl_vars['quantity']->value,'percentage'=>$_smarty_tpl->tpl_vars['rating']->value['percentage'],'count'=>$_smarty_tpl->tpl_vars['rating']->value['count']), 0, true);
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </section>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_stars_details.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_stars_details.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-stars-details">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ratings_stats']->value, 'rating', false, 'quantity');
$_smarty_tpl->tpl_vars['rating']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity']->value => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->do_else = false;
?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_reviews/views/product_reviews/components/product_star_line.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quantity'=>$_smarty_tpl->tpl_vars['quantity']->value,'percentage'=>$_smarty_tpl->tpl_vars['rating']->value['percentage'],'count'=>$_smarty_tpl->tpl_vars['rating']->value['count']), 0, true);
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </section>
<?php }
}
}
}
