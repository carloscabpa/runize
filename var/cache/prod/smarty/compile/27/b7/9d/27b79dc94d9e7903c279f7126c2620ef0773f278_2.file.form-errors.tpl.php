<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c774a0154_45145692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27b79dc94d9e7903c279f7126c2620ef0773f278' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/form-errors.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c774a0154_45145692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98404033061a27c7749dcd2_65980695', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_98404033061a27c7749dcd2_65980695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_98404033061a27c7749dcd2_65980695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="p-0 text-danger">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
