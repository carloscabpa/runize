<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:06
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Blog_List/slider-type-7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c76b0afc9_97069771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6609fdb009b87f7f865da493b6bb504828ac5381' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Blog_List/slider-type-7.tpl',
      1 => 1637518119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c76b0afc9_97069771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/homepages/34/d802225033/htdocs/runize.es/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php if (isset($_smarty_tpl->tpl_vars['posts']->value) && !empty($_smarty_tpl->tpl_vars['posts']->value)) {?>
<div class="nov-bloglist slider-style-7<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_class']->value, ENT_QUOTES, 'UTF-8');?>
">
	<div class="block-blog clearfix">
		<?php if (isset($_smarty_tpl->tpl_vars['title']->value) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
		<h2 class="title_block text-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_align']->value, ENT_QUOTES, 'UTF-8');?>
 style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_style']->value, ENT_QUOTES, 'UTF-8');?>
">
			<span class="title_content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php if (isset($_smarty_tpl->tpl_vars['sub_title']->value) && !empty($_smarty_tpl->tpl_vars['sub_title']->value)) {?>
				<span class="sub_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
			<?php }?>
		</h2>
		<?php }?>
		<div class="block_content">
			<div class="nov-blogslick row slick-slider novblog-box-content" data-rows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number_row']->value, ENT_QUOTES, 'UTF-8');?>
" data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xl']->value, ENT_QUOTES, 'UTF-8');?>
" data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['md']->value, ENT_QUOTES, 'UTF-8');?>
" data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xs']->value, ENT_QUOTES, 'UTF-8');?>
" data-arrows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_arrows']->value, ENT_QUOTES, 'UTF-8');?>
" data-dots="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_dots']->value, ENT_QUOTES, 'UTF-8');?>
" data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoplay']->value, ENT_QUOTES, 'UTF-8');?>
">
	            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
	                <?php $_smarty_tpl->_assignInScope('options', null);?>
	                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['options']) ? $_smarty_tpl->tpl_vars['options']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id'];
$_smarty_tpl->_assignInScope('options', $_tmp_array);?>
	                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['options']) ? $_smarty_tpl->tpl_vars['options']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];
$_smarty_tpl->_assignInScope('options', $_tmp_array);?>
	                <div class="item post-item col item_grid">
	                	<div class="block_item position-relative">
		                    <div class="post-image text-center d-flex mb-10">
		                        <a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
"><img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" class="feat_img_small img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nov_modules_dir']->value, ENT_QUOTES, 'UTF-8');?>
/smartblog/images/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['post_img'], ENT_QUOTES, 'UTF-8');?>
-home-default.jpg"></a>
		                    </div>
		                    <div class="post-description text-center">
			                    <div class="post_title mb-5"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></div>
			                    <div class="post-info mb-15">
			                    	<span>
			                    		<i class="zmdi zmdi-comments"></i> <?php if ($_smarty_tpl->tpl_vars['post']->value['countcomment'] != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['countcomment'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'smartblog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'0 comment','mod'=>'smartblog'),$_smarty_tpl ) );
}?>
			                    	</span>&nbsp;&nbsp;&nbsp;&nbsp;
	                            	<span><i class="zmdi zmdi-calendar-note"></i>&nbsp;<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_added'],"%d %b %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
	                        	</div>
			                    <div class="post-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['short_description'],'htmlall','UTF-8' )),140 )), ENT_QUOTES, 'UTF-8');?>
</div>
			                </div>
			            </div>
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
