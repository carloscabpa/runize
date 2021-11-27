<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c7718ce02_49296348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af6c0754aeaacbe767b5d6353420700612fde8a0' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/head.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_61a27c7718ce02_49296348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/homepages/34/d802225033/htdocs/runize.es/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66512273161a27c771729c8_39076867', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88600848861a27c77173857_60729167', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120908602861a27c77174304_40042131', 'head_seo');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127312400261a27c7717cc58_23773024', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145358772461a27c7717d786_74985405', 'head_icons');
?>

<?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_main_font']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_main_font']) {?>
  <link href="https://fonts.googleapis.com/css?family=<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_main_font'],' ','+'), ENT_QUOTES, 'UTF-8');?>
:300,400,400i,500,600,700,800,900,900i" rel="stylesheet">
<?php }
if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_main_font_primary']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_main_font_primary']) {?>
<link href="https://fonts.googleapis.com/css?family=<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_main_font_primary'],' ','+'), ENT_QUOTES, 'UTF-8');?>
:100,300,400,500,600,700,900,900i" rel="stylesheet">
<?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113798883261a27c77186969_80460672', 'stylesheets');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135470738361a27c77188569_65194694', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137881540561a27c7718a305_19084091', 'hook_header');
?>

<?php if (isset($_smarty_tpl->tpl_vars['nov_custom_css']->value) && $_smarty_tpl->tpl_vars['nov_custom_css']->value) {?>
<style type="text/css">
  <?php echo $_smarty_tpl->tpl_vars['nov_custom_css']->value;?>

</style>
<?php }
}
/* {block 'head_charset'} */
class Block_66512273161a27c771729c8_39076867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_66512273161a27c771729c8_39076867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_88600848861a27c77173857_60729167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_88600848861a27c77173857_60729167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_75730961a27c77174912_36056259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_61949429961a27c77175ee4_72945269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_115180327561a27c77177305_15163163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo'} */
class Block_120908602861a27c77174304_40042131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_120908602861a27c77174304_40042131',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_75730961a27c77174912_36056259',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_61949429961a27c77175ee4_72945269',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_115180327561a27c77177305_15163163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75730961a27c77174912_36056259', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61949429961a27c77175ee4_72945269', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115180327561a27c77177305_15163163', 'head_seo_keywords', $this->tplIndex);
?>
">
  <meta name="title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" />
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_127312400261a27c7717cc58_23773024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_127312400261a27c7717cc58_23773024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_145358772461a27c7717d786_74985405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_145358772461a27c7717d786_74985405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_113798883261a27c77186969_80460672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_113798883261a27c77186969_80460672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_135470738361a27c77188569_65194694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_135470738361a27c77188569_65194694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
?>
  
<?php
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_137881540561a27c7718a305_19084091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_137881540561a27c7718a305_19084091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
}
