<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Subscription/style-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c774207a1_76893439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a544603c6c3cde3780cd499da8fb04d78f53843' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Subscription/style-2.tpl',
      1 => 1637518119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c774207a1_76893439 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nov-subscription style-2<?php if (isset($_smarty_tpl->tpl_vars['el_class']->value) && !empty($_smarty_tpl->tpl_vars['el_class']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<div class="block block-subscription clearfix">
		<div class="row align-items-center no-gutters">
			<div class="col-xl-5 col-md-6 d-flex align-items-center mb-xs-30">
				<?php if (isset($_smarty_tpl->tpl_vars['title']->value) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
					<div class="img_email"><?php echo $_smarty_tpl->tpl_vars['subs_icon']->value;?>
</div>
					<div>
						<div class="title_news"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</div>
						<?php if (isset($_smarty_tpl->tpl_vars['sub_title']->value) && !empty($_smarty_tpl->tpl_vars['sub_title']->value)) {?>
							<span class="sub_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
						<?php }?>
						<?php if (!empty($_smarty_tpl->tpl_vars['desc_title']->value)) {?><div class="desc_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['desc_title']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
					</div>
				<?php }?>
			</div>
			<div class="col-xl-7 col-md-6">
				<div class="block_content block_newsletter">
					<?php if (isset($_smarty_tpl->tpl_vars['nov_emailsubscription']->value) && $_smarty_tpl->tpl_vars['nov_emailsubscription']->value) {?>
					<form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('index'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
					    <?php if ($_smarty_tpl->tpl_vars['nov_emailsubscription']->value['msg']) {?>
					      <p class="alert <?php if ($_smarty_tpl->tpl_vars['nov_emailsubscription']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
					        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nov_emailsubscription']->value['msg'], ENT_QUOTES, 'UTF-8');?>

					      </p>
					    <?php }?>
					    <div class="input-group">
					      <input type="text" class="form-control" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nov_emailsubscription']->value['value'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ENTER YOUR EMAIL','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
...">
					      <span class="input-group-btn">
					        <button class="btn" name="submitNewsletter" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
					      </span>
					    </div>
					    <input type="hidden" name="action" value="0">
				  	</form>
				  	<?php }?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Popup newsletter -->
<?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novpopup_newsletter']) && $_smarty_tpl->tpl_vars['novconfig']->value['novpopup_newsletter'] == 1) {?>
<div id="popup-subscribe" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="zmdi zmdi-close"></i></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('index'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
                    <div class="subscribe_form row no-gutters justify-content-center <?php if (isset($_smarty_tpl->tpl_vars['msg']->value) && $_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }
}?>">
                        <div class="inner col-12 text-center">
                            <div class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up to Newsletter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</div>
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Receive email-only deals, special offers & product exclusives','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
                            <div class="input-subscribe-wrap">
                                <input class="inputNew form-control grey newsletter-input" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter Your email','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" type="text" name="email" size="18" value="" />
                                <span class="input-group-btn">
                                    <button type="submit" name="submitNewsletter" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
                                </span>
                                <input type="hidden" name="action" value="0" />
                            </div>
                            <div class="checkbox">
                                <span class="custom-checkbox">
                                    <input name="no-view" class="no-view" type="checkbox">
                                    <span class="ps-shown-by-js"><i class="material-icons checkbox-checked">check</i></span>
                                </span>
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Don't show this popup again",'d'=>"Shop.Theme.Actions"),$_smarty_tpl ) );?>
</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
}
