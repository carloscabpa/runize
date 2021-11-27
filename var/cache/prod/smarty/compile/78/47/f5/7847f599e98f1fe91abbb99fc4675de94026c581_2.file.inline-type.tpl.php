<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Socials/inline-type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c77434e87_77275520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7847f599e98f1fe91abbb99fc4675de94026c581' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Socials/inline-type.tpl',
      1 => 1637518119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c77434e87_77275520 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nov-socials<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_class']->value, ENT_QUOTES, 'UTF-8');?>
">
	<div class="block-socials clearfix">
		<?php if (isset($_smarty_tpl->tpl_vars['title']->value) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
		<h2 class="title_block">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

			<?php if (isset($_smarty_tpl->tpl_vars['sub_title']->value) && !empty($_smarty_tpl->tpl_vars['sub_title']->value)) {?>
				<span class="sub_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php }?>
		</h2>
		<?php }?>

		<div class="block_content">
			<ul class="list-inline mb-0">
				<?php echo $_smarty_tpl->tpl_vars['content_socials']->value;?>

			</ul>
		</div>
	</div>
</div><?php }
}
