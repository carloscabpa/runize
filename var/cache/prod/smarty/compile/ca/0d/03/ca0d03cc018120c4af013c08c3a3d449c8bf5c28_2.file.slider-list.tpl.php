<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:06
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Product_List/slider-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c76a35775_69513775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca0d03cc018120c4af013c08c3a3d449c8bf5c28' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Product_List/slider-list.tpl',
      1 => 1637518119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c76a35775_69513775 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>
<div class="nov-productlist slider-list style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['style_type_list']->value, ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['el_class']->value) && $_smarty_tpl->tpl_vars['el_class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['el_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<div class="block-product clearfix">
		<?php if (isset($_smarty_tpl->tpl_vars['title']->value) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
		<h2 class="title_block text-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_align']->value, ENT_QUOTES, 'UTF-8');?>
 style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_style']->value, ENT_QUOTES, 'UTF-8');?>
">
			<span class="title_content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['sub_title']->value) && !empty($_smarty_tpl->tpl_vars['sub_title']->value)) {?>
				<span class="sub_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php }?>
		</h2>
		<?php }?>
		<div class="block_content">
			<div class="nov-productslick product_list product_item_list slick-slider row" data-rows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number_row']->value, ENT_QUOTES, 'UTF-8');?>
" data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xl']->value, ENT_QUOTES, 'UTF-8');?>
" data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['md']->value, ENT_QUOTES, 'UTF-8');?>
" data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xs']->value, ENT_QUOTES, 'UTF-8');?>
" data-arrows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_arrows']->value, ENT_QUOTES, 'UTF-8');?>
" data-dots="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_dots']->value, ENT_QUOTES, 'UTF-8');?>
" data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoplay']->value, ENT_QUOTES, 'UTF-8');?>
">
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['nov_dir']->value)."./templates/_partials/layout/items/item_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('showdeal'=>false), 0, true);
?>
			</div>
		</div>
	</div>
</div>
<?php }
}
}
