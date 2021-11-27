<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c770dcba7_46206344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b0f980c7b51cfc409b7349ae84b4a8641c9a59' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/layouts/layout-full-width.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c770dcba7_46206344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140543811261a27c770da244_96929582', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1529606561a27c770dad25_52698985', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149414208161a27c770db9e7_41158809', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_140543811261a27c770da244_96929582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_140543811261a27c770da244_96929582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_1529606561a27c770dad25_52698985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1529606561a27c770dad25_52698985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_172659600561a27c770dbf97_10086576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_149414208161a27c770db9e7_41158809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_149414208161a27c770db9e7_41158809',
  ),
  'content' => 
  array (
    0 => 'Block_172659600561a27c770dbf97_10086576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="full-width">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172659600561a27c770dbf97_10086576', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
