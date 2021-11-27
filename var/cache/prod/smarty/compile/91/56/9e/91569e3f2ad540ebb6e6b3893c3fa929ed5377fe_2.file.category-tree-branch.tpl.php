<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/modules/novadvancedsearch/category-tree-branch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c7733e394_58072466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91569e3f2ad540ebb6e6b3893c3fa929ed5377fe' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/modules/novadvancedsearch/category-tree-branch.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./category-tree-branch.tpl' => 2,
  ),
),false)) {
function content_61a27c7733e394_58072466 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<?php if (count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'child', false, NULL, 'categoryTreeBranch', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
			<li class="dropdown-item" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['id_category']->value) && $_smarty_tpl->tpl_vars['id_category']->value == $_smarty_tpl->tpl_vars['child']->value['id']) {?>selected<?php }?>>
				<span><?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['lever']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['lever']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>-<?php }
}
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
				<?php if (count($_smarty_tpl->tpl_vars['child']->value['children']) > 0) {?>
				<ul class="list-unstyled">
					<?php $_smarty_tpl->_subTemplateRender("file:./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'lever'=>$_smarty_tpl->tpl_vars['lever']->value+1), 0, true);
?>
				</ul>
				<?php }?>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
}
}
