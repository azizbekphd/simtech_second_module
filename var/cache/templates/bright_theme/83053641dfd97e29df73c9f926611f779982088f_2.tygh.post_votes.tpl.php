<?php
/* Smarty version 4.1.0, created on 2022-12-08 09:20:37
  from '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_votes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63918235c37aa6_77077961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83053641dfd97e29df73c9f926611f779982088f' => 
    array (
      0 => '/Users/azizbekphd/Projects/php/cs-shop.devel/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/post_votes.tpl',
      1 => 1670479991,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
  ),
),false)) {
function content_63918235c37aa6_77077961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/azizbekphd/Projects/php/cs-shop.devel/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.vote_up','product_reviews.vote_down','product_reviews.vote_up','product_reviews.vote_down'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <div class="ty-product-review-post-votes" id="product_review-post_votes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'but_href'=>"product_reviews.vote.up?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&return_url=".((string)(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))),'but_text'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_up'],'but_title'=>$_smarty_tpl->__("product_reviews.vote_up"),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__up",'but_icon'=>"ty-icon-arrow-up",'but_rel'=>"nofollow"), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'but_href'=>"product_reviews.vote.down?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&return_url=".((string)(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))),'but_text'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_down'],'but_title'=>$_smarty_tpl->__("product_reviews.vote_down"),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__down",'but_icon'=>"ty-icon-arrow-down",'but_rel'=>"nofollow"), 0, true);
?>
    <!--product_review-post_votes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/post_votes.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/post_votes.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['product_review']->value) {?>
    <div class="ty-product-review-post-votes" id="product_review-post_votes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'but_href'=>"product_reviews.vote.up?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&return_url=".((string)(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))),'but_text'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_up'],'but_title'=>$_smarty_tpl->__("product_reviews.vote_up"),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__up",'but_icon'=>"ty-icon-arrow-up",'but_rel'=>"nofollow"), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'but_href'=>"product_reviews.vote.down?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&return_url=".((string)(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))),'but_text'=>$_smarty_tpl->tpl_vars['product_review']->value['helpfulness']['vote_down'],'but_title'=>$_smarty_tpl->__("product_reviews.vote_down"),'but_role'=>"submit",'but_target_id'=>"product_review-post_votes_".((string)$_smarty_tpl->tpl_vars['product_review_id']->value),'but_meta'=>"cm-ajax ty-btn__text cm-post cm-ajax-full-render ty-product-review-post-votes__down",'but_icon'=>"ty-icon-arrow-down",'but_rel'=>"nofollow"), 0, true);
?>
    <!--product_review-post_votes_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_review_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
