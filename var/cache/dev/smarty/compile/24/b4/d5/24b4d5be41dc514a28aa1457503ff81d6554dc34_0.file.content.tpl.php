<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:43
  from '/homepages/34/d802225033/htdocs/runize.es/override/controllers/admin/templates/cms_content/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a22223ac6181_31095032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24b4d5be41dc514a28aa1457503ff81d6554dc34' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/override/controllers/admin/templates/cms_content/content.tpl',
      1 => 1637518153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a22223ac6181_31095032 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }
if (class_exists('JsComposer') && Module::isInstalled('jscomposer') && Module::isEnabled('jscomposer') && JsComposer::condition()) {?>

    <?php $_smarty_tpl->_assignInScope('jscomposer', Module::getInstanceByName('jscomposer'));?>
    <?php if ($_smarty_tpl->tpl_vars['jscomposer']->value instanceof JsComposer) {?>        
        <?php echo $_smarty_tpl->tpl_vars['jscomposer']->value->renderEditor();?>
        
    <?php }
}?>


<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
