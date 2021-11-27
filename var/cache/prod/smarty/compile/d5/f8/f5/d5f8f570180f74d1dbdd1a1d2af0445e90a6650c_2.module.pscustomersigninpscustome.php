<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c7734e6e4_97287399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1637518137,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c7734e6e4_97287399 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['logged']->value) {?>
  <div class="list">
    <a class="account" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Modules.Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
" rel="nofollow"><i class="fa fa-cog"></i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>
  </div>
  <div class="list">
    <a class="logout"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,'mylogout'), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log me out','d'=>'Modules.Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"><i class="fa fa-sign-out"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Modules.Customersignin'),$_smarty_tpl ) );?>
</span></a>
  </div>
<?php } else { ?>
  <div class="list">
    <a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Modules.Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"><i class="fa fa-sign-in"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Modules.Customersignin'),$_smarty_tpl ) );?>
</span></a>
  </div>
  <div class="list">
    <a class="register" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register Account','d'=>'Modules.Customersignin'),$_smarty_tpl ) );?>
"><i class="fa fa-user"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register Account','d'=>'Modules.Customersignin'),$_smarty_tpl ) );?>
</span></a>
  </div>
<?php }?>

<div class="list">
  <a class="check-out" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('order'),'html' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Modules.Customersignin'),$_smarty_tpl ) );?>
"><i class="material-icons">check_circle</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Modules.Customersignin'),$_smarty_tpl ) );?>
</span></a>
</div><?php }
}
