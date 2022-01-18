<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:34
  from 'module:novloginsocialviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a2221a1d4ca3_83158074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460b8ce0cdfe8be58d7a1f37ed0e299cb568adb1' => 
    array (
      0 => 'module:novloginsocialviewstempla',
      1 => 1637518117,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a2221a1d4ca3_83158074 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /homepages/34/d802225033/htdocs/runize.es/modules/novloginsocial/views/templates/hook/authentication.tpl -->
<?php if ($_smarty_tpl->tpl_vars['facebook_status']->value || $_smarty_tpl->tpl_vars['google_status']->value || $_smarty_tpl->tpl_vars['twitter_status']->value) {?>
<div class="block-sociallogin">
    <div class="title_sociallogin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login using social network','mod'=>'novloginsocial'),$_smarty_tpl ) );?>
:</div>
    <div class="content_sociallogin row spacing-10">
        <?php if ($_smarty_tpl->tpl_vars['facebook_status']->value) {?>
            <div class="col">
                <a <?php if ($_smarty_tpl->tpl_vars['type_social']->value) {?>
                        onclick="SocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'novloginsocial','controller'=>'authenticate','params'=>array('provider'=>'facebook','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
                    <?php } else { ?>
                        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'novloginsocial','controller'=>'authenticate','params'=>array('provider'=>'facebook','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
                    <?php }?>
                   class="btn btn-sociallogin-facebook col">
                    <i class="zmdi zmdi-facebook"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','mod'=>'novloginsocial'),$_smarty_tpl ) );?>

                </a>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['twitter_status']->value) {?>
            <div class="col">
                <a <?php if ($_smarty_tpl->tpl_vars['type_social']->value) {?>
                        onclick="SocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'novloginsocial','controller'=>'authenticate','params'=>array('provider'=>'twitter','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
                    <?php } else { ?>
                        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'novloginsocial','controller'=>'authenticate','params'=>array('provider'=>'twitter','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
                    <?php }?>
                   class="btn btn-sociallogin-twitter col">
                    <i class="zmdi zmdi-twitter"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'novloginsocial'),$_smarty_tpl ) );?>

                </a>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['google_status']->value) {?>
            <div class="col">
                <a <?php if ($_smarty_tpl->tpl_vars['type_social']->value) {?>
                        onclick="SocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'novloginsocial','controller'=>'authenticate','params'=>array('provider'=>'google','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
                    <?php } else { ?>
                        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'novloginsocial','controller'=>'authenticate','params'=>array('provider'=>'google','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
                    <?php }?>
                   class="btn btn-sociallogin-google col">
                    <i class="zmdi zmdi-google-old"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google','mod'=>'novloginsocial'),$_smarty_tpl ) );?>

                </a>
            </div>
        <?php }?>
    </div>
</div>
<?php }?>
<!-- end /homepages/34/d802225033/htdocs/runize.es/modules/novloginsocial/views/templates/hook/authentication.tpl --><?php }
}
