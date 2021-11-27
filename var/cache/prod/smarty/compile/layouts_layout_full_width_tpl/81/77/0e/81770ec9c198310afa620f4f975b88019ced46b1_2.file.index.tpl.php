<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c770cad63_26451139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81770ec9c198310afa620f4f975b88019ced46b1' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/index.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c770cad63_26451139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79114443261a27c770c7337_52154147', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70886701361a27c770ca6a3_53982089', 'page_footer_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_68620290761a27c770c7a57_10463543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_134680803961a27c770c8935_73686020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      	<div class="container">
        <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

    	</div>
      <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1544983261a27c770c83f9_19428144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134680803961a27c770c8935_73686020', 'hook_home', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_79114443261a27c770c7337_52154147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_79114443261a27c770c7337_52154147',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_68620290761a27c770c7a57_10463543',
  ),
  'page_content' => 
  array (
    0 => 'Block_1544983261a27c770c83f9_19428144',
  ),
  'hook_home' => 
  array (
    0 => 'Block_134680803961a27c770c8935_73686020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68620290761a27c770c7a57_10463543', 'page_content_top', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1544983261a27c770c83f9_19428144', 'page_content', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_70886701361a27c770ca6a3_53982089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_70886701361a27c770ca6a3_53982089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_footer_container'} */
}
