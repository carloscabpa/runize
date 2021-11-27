<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:34
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novloginsocial/views/templates/hook/popuplogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a2221a1c3e90_55694203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdc2189dea3b17ebd9ac087ff951205b9bb0145b' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novloginsocial/views/templates/hook/popuplogin.tpl',
      1 => 1637518117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a2221a1c3e90_55694203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189675134661a2221a1bfd19_65011766', 'login_form_container');
}
/* {block 'display_after_login_form'} */
class Block_20795334261a2221a1c2167_70900665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_189675134661a2221a1bfd19_65011766 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form_container' => 
  array (
    0 => 'Block_189675134661a2221a1bfd19_65011766',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_20795334261a2221a1c2167_70900665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="block-form-login">
    <section class="login-form">
        <div class="page_title_account"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span></div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLoginSocialAnywhere'),$_smarty_tpl ) );?>

        <p class="mb-15"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'module:novloginsocial/views/templates/hook/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form_popup']->value),$_smarty_tpl ) );?>

    </section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20795334261a2221a1c2167_70900665', 'display_after_login_form', $this->tplIndex);
?>

    <div class="no-account">
        <a class="font-weight-bold" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
    </div>
 </div>
<?php
}
}
/* {/block 'login_form_container'} */
}
