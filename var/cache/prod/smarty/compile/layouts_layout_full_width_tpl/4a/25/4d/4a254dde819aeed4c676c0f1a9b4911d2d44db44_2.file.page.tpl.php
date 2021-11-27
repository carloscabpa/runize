<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c770d5e98_51563487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a254dde819aeed4c676c0f1a9b4911d2d44db44' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/page.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c770d5e98_51563487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176544478661a27c770d00d3_22722809', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_63268097461a27c770d0e69_51853454 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="page-header">
          <h1 class="page-title hidden-xs-up"><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </div>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_132642247161a27c770d06e5_43752508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63268097461a27c770d0e69_51853454', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_125710840061a27c770d3915_76118189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_169275892661a27c770d4074_79969550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_41038014961a27c770d3234_25329290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125710840061a27c770d3915_76118189', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169275892661a27c770d4074_79969550', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_206069724261a27c770d50b0_46861871 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_71725905461a27c770d4bf9_28646259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206069724261a27c770d50b0_46861871', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_176544478661a27c770d00d3_22722809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_176544478661a27c770d00d3_22722809',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_132642247161a27c770d06e5_43752508',
  ),
  'page_title' => 
  array (
    0 => 'Block_63268097461a27c770d0e69_51853454',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_41038014961a27c770d3234_25329290',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_125710840061a27c770d3915_76118189',
  ),
  'page_content' => 
  array (
    0 => 'Block_169275892661a27c770d4074_79969550',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_71725905461a27c770d4bf9_28646259',
  ),
  'page_footer' => 
  array (
    0 => 'Block_206069724261a27c770d50b0_46861871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132642247161a27c770d06e5_43752508', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41038014961a27c770d3234_25329290', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71725905461a27c770d4bf9_28646259', 'page_footer_container', $this->tplIndex);
?>


  </div>

<?php
}
}
/* {/block 'content'} */
}
