<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:33
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a22219f10f61_93579666',
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
function content_61a22219f10f61_93579666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52451814161a22219f0a1a5_77343919', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_42884776361a22219f0b212_71596266 extends Smarty_Internal_Block
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
class Block_172473388561a22219f0a8b2_21497780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42884776361a22219f0b212_71596266', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6934183061a22219f0e1f6_89625054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_51888152061a22219f0eaf2_58218267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_49935669861a22219f0d9e9_43617380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6934183061a22219f0e1f6_89625054', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51888152061a22219f0eaf2_58218267', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_193809645861a22219f0fed9_61620969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_139685921261a22219f0f874_98465186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193809645861a22219f0fed9_61620969', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_52451814161a22219f0a1a5_77343919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_52451814161a22219f0a1a5_77343919',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_172473388561a22219f0a8b2_21497780',
  ),
  'page_title' => 
  array (
    0 => 'Block_42884776361a22219f0b212_71596266',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_49935669861a22219f0d9e9_43617380',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6934183061a22219f0e1f6_89625054',
  ),
  'page_content' => 
  array (
    0 => 'Block_51888152061a22219f0eaf2_58218267',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_139685921261a22219f0f874_98465186',
  ),
  'page_footer' => 
  array (
    0 => 'Block_193809645861a22219f0fed9_61620969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div id="main">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172473388561a22219f0a8b2_21497780', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49935669861a22219f0d9e9_43617380', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139685921261a22219f0f874_98465186', 'page_footer_container', $this->tplIndex);
?>


  </div>

<?php
}
}
/* {/block 'content'} */
}
