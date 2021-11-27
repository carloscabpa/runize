<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:33
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a22219f02598_57236405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '674c00ac9487f93f6baadf05631d61af52c9e592' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/errors/404.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a22219f02598_57236405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192556076861a22219eedbc4_23177408', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101233313461a22219eef897_22842746', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153512580861a22219ef0300_51212277', 'breadcrumb');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111213226261a22219ef0df5_66604006', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138819271661a22219f016f1_65368297', "footer");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_192556076861a22219eedbc4_23177408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_192556076861a22219eedbc4_23177408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="hidden-xs-up">
  		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

  	</div>
<?php
}
}
/* {/block 'page_title'} */
/* {block 'header'} */
class Block_101233313461a22219eef897_22842746 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_101233313461a22219eef897_22842746',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'breadcrumb'} */
class Block_153512580861a22219ef0300_51212277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_153512580861a22219ef0300_51212277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'page_content_container'} */
class Block_111213226261a22219ef0df5_66604006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_111213226261a22219ef0df5_66604006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  	<?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_404_style'] == 'style_dark') {?>
  		<section id="content" class="page-content page-not-found style_dark d-flex align-items-center justify-content-center">
  			<div class="text-center">
				<div class="image">
					<img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_dir']->value, ENT_QUOTES, 'UTF-8');?>
img-404-1.png" alt="Image 404" />
				</div>
				<h2 class="text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page Not found','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</h2>
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We’re sorry — something has gone wrong on our end.','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</h4>
				<p class="info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If difficulties persist, please contact the System Administrator of this site and report the error below...','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</p>
				<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
					<i class="fa fa-home"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to homepage','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</span>
				</a>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

			</div>
		</section>
	<?php } else { ?>
  		<section id="content" class="page-content page-not-found style_light d-flex align-items-center justify-content-center">
  			<div class="text-center">
				<div class="image">
					<img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_dir']->value, ENT_QUOTES, 'UTF-8');?>
img-404-2.png" alt="Image 404" />
				</div>
				<h1 class="text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'404','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</h1>
				<h2 class="text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page Not Found','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</hw>
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We’re sorry — something has gone wrong on our end.','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</h4>
				<p class="info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If difficulties persist, please contact the System Administrator of this site and report the error below...','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</p>
				<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
					<i class="fa fa-home"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to homepage','d'=>'Shop.Theme.Errors'),$_smarty_tpl ) );?>
</span>
				</a>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

			</div>
		</section>
  	<?php }
}
}
/* {/block 'page_content_container'} */
/* {block "footer"} */
class Block_138819271661a22219f016f1_65368297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_138819271661a22219f016f1_65368297',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "footer"} */
}
