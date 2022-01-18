<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/modules/jscomposer/views/templates/front/jscomposer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c774582a9_75592130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73898c573108ec101458060261083603c74fde6f' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/jscomposer/views/templates/front/jscomposer.tpl',
      1 => 1637518115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c774582a9_75592130 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['results']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'res');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['res']->value) {
?>
	<?php if ($_smarty_tpl->tpl_vars['res']->value['content'] != '') {
echo $_smarty_tpl->tpl_vars['res']->value['content'];
}?>
	<?php ob_start();
echo htmlspecialchars(Context::getcontext()->language->id, ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
ob_start();
echo htmlspecialchars(Configuration::get("_wpb_vccaw_".((string)$_smarty_tpl->tpl_vars['res']->value['id_vccontentanywhere'])."_".$_prefixVariable1."_css"), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('vc_optname', $_prefixVariable2);?>
	<style type="text/css">
            <?php echo $_smarty_tpl->tpl_vars['vc_optname']->value;?>

	</style>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
echo $_smarty_tpl->tpl_vars['results']->value;?>

<?php }
}
}
