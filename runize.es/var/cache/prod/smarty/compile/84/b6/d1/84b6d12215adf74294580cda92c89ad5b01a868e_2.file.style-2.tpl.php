<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:06
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Policy/style-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c764d53a0_54123321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b6d12215adf74294580cda92c89ad5b01a868e' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Policy/style-2.tpl',
      1 => 1637518119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c764d53a0_54123321 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="policy-item style-2 text-xs-center<?php if ($_smarty_tpl->tpl_vars['bg']->value == true) {?> has_bg<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['el_class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['bg']->value == true) {?> style="background: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accent_color']->value, ENT_QUOTES, 'UTF-8');?>
;"<?php }?>>
	<div class="d-xl-flex align-items-center">
		<div class="policy_icon"><?php echo $_smarty_tpl->tpl_vars['policy_icon']->value;?>
</div>
		<div class="media-body">
			<div class="title_policy title-style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_style']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</div>
			<?php if ($_smarty_tpl->tpl_vars['content_policy']->value) {?><div class="content-policy"><?php echo $_smarty_tpl->tpl_vars['content_policy']->value;?>
</div><?php }?>
		</div>
	</div>
</div><?php }
}
