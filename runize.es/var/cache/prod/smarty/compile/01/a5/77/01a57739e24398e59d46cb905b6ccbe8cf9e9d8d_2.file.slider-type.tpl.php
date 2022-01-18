<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:06
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Manufacture/slider-type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c76b552d3_51178940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01a57739e24398e59d46cb905b6ccbe8cf9e9d8d' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Manufacture/slider-type.tpl',
      1 => 1637518119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c76b552d3_51178940 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['manus']->value) && !empty($_smarty_tpl->tpl_vars['manus']->value)) {?>
<div class="nov-manufacturelist style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mn_style']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['el_class']->value, ENT_QUOTES, 'UTF-8');?>
">
	<div class="block-manufacturelist clearfix">
		<?php if (isset($_smarty_tpl->tpl_vars['title']->value) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
		<h2 class="title_block">
			<span class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['sub_title']->value) && !empty($_smarty_tpl->tpl_vars['sub_title']->value)) {?>
				<span class="sub_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php }?>
		</h2>
		<?php }?>
		<div class="block_content">
			<div class="nov-manufactureslick slick-slider" data-rows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number_row']->value, ENT_QUOTES, 'UTF-8');?>
" data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xl']->value, ENT_QUOTES, 'UTF-8');?>
" data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['md']->value, ENT_QUOTES, 'UTF-8');?>
" data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xs']->value, ENT_QUOTES, 'UTF-8');?>
" data-arrows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_arrows']->value, ENT_QUOTES, 'UTF-8');?>
" data-dots="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_dots']->value, ENT_QUOTES, 'UTF-8');?>
" data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoplay']->value, ENT_QUOTES, 'UTF-8');?>
">          
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manus']->value, 'manu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['manu']->value) {
?>
	               	<div class="item logo-manu">
						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manu']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manu']->value['link_rewrite']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manu']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
							<img class="img-fluid" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manu']->value['image'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="logo-manu"/>
						</a>
					</div>
	            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		    </div>
		</div>
	</div>
</div>
<?php }
}
}
