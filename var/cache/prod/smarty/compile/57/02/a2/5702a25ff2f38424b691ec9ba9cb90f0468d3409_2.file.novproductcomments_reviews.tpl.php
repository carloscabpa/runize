<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:06
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/modules/novproductcomments/novproductcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c768211d7_00255041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5702a25ff2f38424b691ec9ba9cb90f0468d3409' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/modules/novproductcomments/novproductcomments_reviews.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c768211d7_00255041 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="product-comments">	
	<div class="star_content">
	<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
			<div class="star"></div>
		<?php } else { ?>
			<div class="star star_on"></div>
		<?php }?>
	<?php
}
}
?>
	</div>
	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('%s ',$_smarty_tpl->tpl_vars['nbComments']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reviews','d'=>'Modules.Novproductcomments.Tab'),$_smarty_tpl ) );?>
</span>
</div><?php }
}
