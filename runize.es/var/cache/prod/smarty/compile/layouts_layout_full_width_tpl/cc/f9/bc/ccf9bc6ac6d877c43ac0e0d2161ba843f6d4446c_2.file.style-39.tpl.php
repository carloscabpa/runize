<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/layout/header/style-39.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c77207965_49881768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccf9bc6ac6d877c43ac0e0d2161ba843f6d4446c' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/layout/header/style-39.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c77207965_49881768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25000442761a27c771fa3b6_31960810', "header-mobile");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1969645361a27c771fd174_46889968', 'header_top');
?>


<?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_sticky'] == '1') {?>
    <div id="header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="contentstickynew_logo col-xl-3 col-lg-2"></div>
                <div class="contentstickynew_menu col-xl-6 col-lg-7 position-static"></div>
                <div class="contentstickynew_cart d-flex justify-content-end col-lg-3"></div>
            </div>
        </div>
    </div>
<?php }
}
/* {block "header-mobile"} */
class Block_25000442761a27c771fa3b6_31960810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header-mobile' => 
  array (
    0 => 'Block_25000442761a27c771fa3b6_31960810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-mobile hidden-md-up">
        <div class="hidden-md-up text-xs-center mobile d-flex align-items-center">
            <div id="_mobile_mainmenu" class="item-mobile-top"><i class="zmdi zmdi-sort-amount-asc"></i></div>
            <div class="mobile_logo item-mobile-top">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                    <img class="logo img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_dir_themeconfig']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_logo_mobile'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                </a>
            </div>
            <div id="_mobile_advancsearch"></div>
            <div id="_mobile_menutop" class="item-mobile-top nov-toggle-page d-flex align-items-center justify-content-center" data-target="#mobile-pagemenu"><i class="zmdi zmdi-view-headline"></i></div>
        </div>
    </div>
<?php
}
}
/* {/block "header-mobile"} */
/* {block 'header_top'} */
class Block_1969645361a27c771fd174_46889968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_1969645361a27c771fd174_46889968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-top hidden-sm-down">
        <div class="container">
            <div class="row align-items-center no-gutters">
                <div id="_desktop_logo" class="contentsticky_logo col-md-2">
                    <?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_customlogo']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_customlogo'] && isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_customlogo_enable']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_customlogo_enable'] == 1) {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img class="logo img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_dir_themeconfig']->value, ENT_QUOTES, 'UTF-8');?>
logos/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_customlogo'], ENT_QUOTES, 'UTF-8');?>
.png" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        </a>
                    <?php } else { ?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img class="logo img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        </a>
                    <?php }?>
                </div>
                <div class="col-lg-8 col-md-7 position-static">
                    <div id="_desktop_top_menu" class="contentsticky_menu">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayMegamenu",'menu_type'=>"horizontal"),$_smarty_tpl ) );?>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3 d-flex align-items-center justify-content-end header-top-right group-login has_after">
                    <div id="_desktop_advancsearch"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdvanceSearch'),$_smarty_tpl ) );?>
</div>
                    <div id="block_myaccount_infos" class="myaccount_infos groups-selector hidden-sm-down dropdown">
                        <div class="myaccount-title dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"" id="_desktop_user_info">
                            <i class="novicon_account small"></i>
                        </div>
                        <div class="account-list dropdown-menu" aria-labelledby="dropdownMenuButton" id="_desktop_account_list">
                            <div class="account-list-content">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBlock'),$_smarty_tpl ) );?>

                            </div>
                        </div>
                    </div>
                   <div class="contentsticky_cart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'header_top'} */
}
