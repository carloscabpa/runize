<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c773b4149_39003271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1637518137,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_61a27c773b4149_39003271 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart">
  <div class="blockcart cart-preview" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-18') {?>
      <div class="open_header_cart_canvas hidden-sm-down">
        <i class="icon_cart"></i>
        <div class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</div>
      </div>
    <?php }?>
      <div class="header-cart<?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-18') {?> hidden-md-up<?php }?>">
        <div class="cart-left">
          <div class="shopping-cart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Icon','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</div>
        </div>
        <div class="cart-right">
          <span class="title-cart title_icon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        </div>  
        <span class="cart-products-count"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="label-items d-xs-none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'items','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
      </div>
    <div class="cart_block<?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-18') {?> header-cart-canvas<?php }
if (count($_smarty_tpl->tpl_vars['cart']->value['products']) > 3) {?> has-scroll<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-18') {?><div class="close_canvas cart hidden-sm-down"><i class="zmdi zmdi-close"></i></div><?php }?>
      <div class="cart-block-content">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
              <li><?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
          <div class="cart-total">
            <div>
              <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
              <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
          </div>
          <div class="cart-buttons">
            <?php $_smarty_tpl->_assignInScope('link', Context::getContext()->link);?>
            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('order'),'html' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary mb-5 btn-checkout"><i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary btn-cart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
          </div>
        <?php } else { ?>
          <div class="no-items">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products in the cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

          </div>
        <?php }?>
      </div>
    </div>
  </div>
</div><?php }
}
