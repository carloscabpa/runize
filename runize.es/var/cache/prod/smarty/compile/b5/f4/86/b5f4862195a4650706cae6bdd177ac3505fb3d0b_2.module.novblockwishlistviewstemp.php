<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:06
  from 'module:novblockwishlistviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c7682be03_43754859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5f4862195a4650706cae6bdd177ac3505fb3d0b' => 
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
function content_61a27c7682be03_43754859 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="addToWishlist" href="#" data-rel="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
', false, 1, '', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); return false;">
	<i class="zmdi zmdi-favorite-outline"></i>
	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Add to Wishlist",'mod'=>'novblockwishlist'),$_smarty_tpl ) );?>
</span>
</a><?php }
}
