<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:33
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/layouts/layout-one-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a22219f17cd7_09605235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab4988f6188822751a74adf4c646b5bcc992a08' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/layouts/layout-one-column.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a22219f17cd7_09605235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127670164661a22219f15588_84566122', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193938566261a22219f160c8_11412082', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182735422261a22219f16a33_15997647', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_127670164661a22219f15588_84566122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_127670164661a22219f15588_84566122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_193938566261a22219f160c8_11412082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_193938566261a22219f160c8_11412082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_170127045761a22219f17073_44850610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      		<p>Hello world! This is HTML5 Boilerplate.</p>
    	<?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_182735422261a22219f16a33_15997647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_182735422261a22219f16a33_15997647',
  ),
  'content' => 
  array (
    0 => 'Block_170127045761a22219f17073_44850610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container">
		<div id="content-wrapper" class="onecol">
    	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170127045761a22219f17073_44850610', 'content', $this->tplIndex);
?>

		</div>
  	</div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
