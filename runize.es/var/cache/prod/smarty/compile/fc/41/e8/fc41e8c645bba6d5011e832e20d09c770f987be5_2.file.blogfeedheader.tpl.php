<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:05
  from '/homepages/34/d802225033/htdocs/runize.es/modules/smartblog/views/templates/front/plugins/blogfeedheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c75e47e33_64906470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc41e8c645bba6d5011e832e20d09c770f987be5' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/smartblog/views/templates/front/plugins/blogfeedheader.tpl',
      1 => 1637518134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c75e47e33_64906470 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="alternate" type="application/rss+xml" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['meta_title']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedUrl']->value, ENT_QUOTES, 'UTF-8');?>
" />


  <meta name="title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keyword']->value, ENT_QUOTES, 'UTF-8');?>
">
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }
}
