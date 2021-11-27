<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:33
  from '/homepages/34/d802225033/htdocs/runize.es/modules/smartblog/views/templates/admin/addjs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a22219597e43_38585394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a054bc18ed428838443ff2d477b0fb5cf094248c' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/smartblog/views/templates/admin/addjs.tpl',
      1 => 1637518133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a22219597e43_38585394 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
.icon-AdminSmartBlog:before{
  content: "\f14b";
   }
 
</style>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['smartmodules_dir']->value;?>
modules/smartblog/views/css/bootstrap-grid.css">
<?php echo '<script'; ?>
 type="text/javascript">
		<?php if (isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }
echo '</script'; ?>
><?php }
}
