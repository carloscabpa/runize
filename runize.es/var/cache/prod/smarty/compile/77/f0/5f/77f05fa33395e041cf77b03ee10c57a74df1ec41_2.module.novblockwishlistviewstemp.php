<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from 'module:novblockwishlistviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c77357fc2_40143647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f05fa33395e041cf77b03ee10c57a74df1ec41' => 
    array (
      0 => 'module:novblockwishlistviewstemp',
      1 => 1637518116,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c77357fc2_40143647 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="link_wishlist">
	<a<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'module-novblockwishlist-mywishlist') {?> class="active"<?php }?> href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('novblockwishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Wishlists','mod'=>'novblockwishlist'),$_smarty_tpl ) );?>
">
		<i class="fa fa-heart"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Wishlists','mod'=>'novblockwishlist'),$_smarty_tpl ) );?>
</span>
	</a>
</div>
<?php }
}
