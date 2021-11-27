<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:34
  from 'module:novloginsocialviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a2221a1e2ac5_81626667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c143ffcc78e2c0d71edc1320ce545b6beb030a' => 
    array (
      0 => 'module:novloginsocialviewstempla',
      1 => 1637518117,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_61a2221a1e2ac5_81626667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /homepages/34/d802225033/htdocs/runize.es/modules/novloginsocial/views/templates/hook/login-form.tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77077623961a2221a1d9776_41465849', 'login_form');
?>
<!-- end /homepages/34/d802225033/htdocs/runize.es/modules/novloginsocial/views/templates/hook/login-form.tpl --><?php }
/* {block 'login_form_errors'} */
class Block_70840485161a2221a1d9f13_00292119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row no-gutters">
      <div class="col-md-10 offset-md-2">
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
      </div>
    </div>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_23346139561a2221a1dbae1_10203630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_83535952761a2221a1de545_30834967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_199846998661a2221a1dc969_38180904 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83535952761a2221a1de545_30834967', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_98668674761a2221a1e1a29_73369905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <button class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_172108792561a2221a1e15c1_01936218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer clearfix">
        <div class="row no-gutters">
          <div class="col-md-10 offset-md-2">
            <input type="hidden" name="submitLogin" value="1">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98668674761a2221a1e1a29_73369905', 'form_buttons', $this->tplIndex);
?>

          </div>
        </div>
      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_77077623961a2221a1d9776_41465849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_77077623961a2221a1d9776_41465849',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_70840485161a2221a1d9f13_00292119',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_23346139561a2221a1dbae1_10203630',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_199846998661a2221a1dc969_38180904',
  ),
  'form_field' => 
  array (
    0 => 'Block_83535952761a2221a1de545_30834967',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_172108792561a2221a1e15c1_01936218',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_98668674761a2221a1e1a29_73369905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70840485161a2221a1d9f13_00292119', 'login_form_errors', $this->tplIndex);
?>


  <form class="login-form-popup" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23346139561a2221a1dbae1_10203630', 'login_form_actionurl', $this->tplIndex);
?>
" method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199846998661a2221a1dc969_38180904', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password mt-25 mb-25">
        <i class="zmdi zmdi-email"></i>&nbsp;
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
&nbsp;
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>&nbsp;?
        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172108792561a2221a1e15c1_01936218', 'login_form_footer', $this->tplIndex);
?>


  </form>
<?php
}
}
/* {/block 'login_form'} */
}
