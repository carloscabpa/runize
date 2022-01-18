<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:34
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a2221a0736d0_58515116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e14896ef90f7ce4c64ef6272dab8bd1da6a8b87' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/layouts/layout-both-columns.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:catalog/_partials/col-right-tab-detail.tpl' => 2,
    'file:_partials/layout/footer/style-1.tpl' => 1,
    'file:_partials/layout/footer/style-2.tpl' => 1,
    'file:_partials/layout/footer/style-3.tpl' => 1,
    'file:_partials/layout/footer/style-4.tpl' => 1,
    'file:_partials/layout/footer/style-5.tpl' => 1,
    'file:_partials/layout/footer/style-6.tpl' => 1,
    'file:_partials/layout/footer/style-7.tpl' => 1,
    'file:_partials/layout/footer/style-8.tpl' => 1,
    'file:_partials/layout/footer/style-9.tpl' => 1,
    'file:_partials/layout/footer/style-10.tpl' => 1,
    'file:_partials/layout/footer/style-11.tpl' => 1,
    'file:_partials/layout/footer/style-12.tpl' => 1,
    'file:_partials/layout/footer/style-13.tpl' => 1,
    'file:_partials/layout/footer/style-14.tpl' => 1,
    'file:_partials/layout/footer/style-15.tpl' => 1,
    'file:_partials/layout/footer/style-16.tpl' => 1,
    'file:_partials/layout/footer/style-17.tpl' => 1,
    'file:_partials/layout/footer/style-18.tpl' => 1,
    'file:_partials/layout/footer/style-19.tpl' => 1,
    'file:_partials/layout/footer/style-20.tpl' => 1,
    'file:_partials/layout/footer/style-21.tpl' => 1,
    'file:_partials/layout/footer/style-22.tpl' => 1,
    'file:_partials/layout/footer/style-23.tpl' => 1,
    'file:_partials/layout/footer/style-24.tpl' => 1,
    'file:_partials/layout/footer/style-25.tpl' => 1,
    'file:_partials/layout/footer/style-26.tpl' => 1,
    'file:_partials/layout/footer/style-27.tpl' => 1,
    'file:_partials/layout/footer/style-28.tpl' => 1,
    'file:_partials/layout/footer/style-29.tpl' => 1,
    'file:_partials/layout/footer/style-30.tpl' => 1,
    'file:_partials/layout/footer/style-31.tpl' => 1,
    'file:_partials/layout/footer/style-32.tpl' => 1,
    'file:_partials/layout/footer/style-33.tpl' => 1,
    'file:_partials/layout/footer/style-34.tpl' => 1,
    'file:_partials/layout/footer/style-35.tpl' => 1,
    'file:_partials/layout/footer/no-footer.tpl' => 1,
    'file:_elements/social-list.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_61a2221a0736d0_58515116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

    <head>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160195646661a22219f1bfd6_65816647', 'head');
?>

    </head>
    <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_mode_layout']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_mode_layout'] == 'boxed') {?> layout-boxed<?php }
if (isset($_smarty_tpl->tpl_vars['class_homepage']->value) && $_smarty_tpl->tpl_vars['class_homepage']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_homepage']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34028659261a22219f2b165_56635505', 'hook_after_body_opening_tag');
?>

        <main id="main-site">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5434647561a22219f2c3f5_80038891', 'product_activation');
?>

            <header id="header" class="header-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_sticky'] == '1') {?> sticky-menu<?php }?>">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20070960061a22219f2ecf8_58747731', 'header');
?>

            </header>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117096840961a22219f2fec2_99446448', 'notifications');
?>


            <div id="wrapper-site" class="<?php if (isset($_smarty_tpl->tpl_vars['class_homepage']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['class_homepage']->value, ENT_QUOTES, 'UTF-8');?>
-edit<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77041745461a22219f32b44_25653439', 'breadcrumb');
?>

                <?php }?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107058200561a22219f34427_89593228', "left_column");
?>


                        <?php if (isset($_smarty_tpl->tpl_vars['class_homepage']->value) && $_smarty_tpl->tpl_vars['class_homepage']->value && $_smarty_tpl->tpl_vars['class_homepage']->value == 'home-23' && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
                            <div class="content_displaytop">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

                            </div>
                        <?php }?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149543926361a22219f3bdf4_70692836', "content_wrapper");
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147629123261a22219f3d854_08653795', "right_column");
?>
 
            </div>

    <?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-1') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-2') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-3') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-4') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-5') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-5.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-6') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-6.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-7') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-8') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-8.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-9') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-9.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-10') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-10.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-11') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-11.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-12') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-12.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-13') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-13.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-14') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-14.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-15') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-15.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-16') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-16.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-17') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-17.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-18') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-18.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-19') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-19.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-20') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-20.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-21') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-21.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-22') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-22.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-23') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-23.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-24') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-24.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-25') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-25.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-26') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-26.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-27') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-27.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-28') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-28.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-29') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-29.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-30') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-30.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-31') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-31.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-32') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-32.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-33') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-33.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-34') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-34.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_footer_style'] == 'style-35') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/style-35.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:_partials/layout/footer/no-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</main>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213669455961a2221a02e788_05990486', "mainmenu_mobile");
?>


<div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Menu",'d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</div>
            <div class="close-box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Close",'d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</div>
        </div>
        <div id="_mobile_top_menu" class="js-top-menu box-content"></div>
    </div>
</div>

<div id="mobile-blockcart" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Cart",'d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</div>
            <div class="close-box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Close",'d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</div>
        </div>
        <div id="_mobile_cart" class="box-content"></div>
    </div>
</div>

<div id="mobile-pageaccount" class="mobile-boxpage d-flex hidden-md-up" data-titlebox-parent="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account'),$_smarty_tpl ) );?>
">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="back-box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Back",'d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</div>
            <div class="title-box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account','d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</div>
            <div class="close-box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Close",'d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</div>
        </div>
        <div class="box-content d-flex justify-content-center align-items-center text-center">
            <div>
                <div id="_mobile_account_list"></div>
                <div class="links-currency" data-target="#box-currency" data-titlebox="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</span><i class="zmdi zmdi-arrow-right"></i></div>
                <div class="links-language" data-target="#box-language" data-titlebox="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</span><i class="zmdi zmdi-arrow-right"></i></div>
            </div>
        </div>
        <div id="box-currency" class="box-content d-flex">
            <div class="w-100">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nov_currency']->value['currencies'], 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
                    <div class="item-currency<?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> current<?php }?>">
                        <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <div id="box-language" class="box-content d-flex">
            <div class="w-100">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nov_languages']->value['languages'], 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                    <div class="item-language<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['nov_languages']->value['current_language']['id_lang']) {?> current<?php }?>">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
" class="d-flex align-items-center"><img class="img-fluid mr-2" src="<?php echo $_smarty_tpl->tpl_vars['img_lang']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11" /><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span></a>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['class_homepage']->value) && $_smarty_tpl->tpl_vars['class_homepage']->value && $_smarty_tpl->tpl_vars['class_homepage']->value == 'home-15' && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_enable_social_sticky']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_enable_social_sticky'] == 1) {?>
    <div id="social_sticky">
        <?php $_smarty_tpl->_subTemplateRender("file:_elements/social-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <?php }
}
if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_bottom_nav_disable']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_bottom_nav_disable'] == 1) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121595204461a2221a04bdc7_09754363', "stickymenu_bottom_mobile");
?>

<?php }?>

<div class="modal-login modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPopupLogin'),$_smarty_tpl ) );?>

    </div>
</div>

<div id="toggle_popup_login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="toggle_popup_login" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'authentication') {?>
                        <div class="col-12">
                        <?php } else { ?>
                            <div class="col-6">
                            <?php }?>
                            <div class="block-form-login">
                                <div class="page_title_account"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</span></div>
                                <p class="mb-15"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insert your account information','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
: </p>
                                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
                                    <section>
                                        <input type="hidden" name="id_customer" value="">

                                        <div class="form-group row no-gutters novform-firstname">
                                            <div class="col-md-8"><input class="form-control" name="firstname" type="text" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" required=""></div>
                                        </div>

                                        <div class="form-group row no-gutters novform-lastname">
                                            <div class="col-md-8"><input class="form-control" name="lastname" type="text" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" required=""></div>
                                        </div>

                                        <div class="form-group row no-gutters novform-email">
                                            <div class="col-md-8"><input class="form-control" name="email" type="email" value="" placeholder="Email" required=""></div>
                                        </div>

                                        <div class="form-group row no-gutters novform-password">
                                            <div class="col-md-8">
                                                <div class="input-group js-parent-focus">
                                                    <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
" required="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row no-gutters novform-newsletter">
                                            <div class="col-md-8">
                                                <span class="custom-checkbox d-inline-flex">
                                                    <input name="newsletter" type="checkbox" value="1">
                                                    <span><i class="material-icons checkbox-checked">check</i></span>
                                                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
                                                </span>
                                            </div>
                                        </div>
                                    </section>

                                    <footer class="form-footer clearfix">
                                        <div class="row no-gutters">
                                            <div class="col-md-10 offset-md-2">
                                                <input type="hidden" name="submitCreate" value="1">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205194434861a2221a06c604_63719079', "form_buttons");
?>

                                            </div>
                                        </div>
                                    </footer>
                                </form>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'authentication') {?>
                            <div class="col-6">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPopupLogin'),$_smarty_tpl ) );?>

                            </div>
                        <?php }?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10007990461a2221a06f355_90269056', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83226434261a2221a070f50_56699203', 'hook_before_body_closing_tag');
?>

</body>
</html>
<?php }
/* {block 'head'} */
class Block_160195646661a22219f1bfd6_65816647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_160195646661a22219f1bfd6_65816647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_34028659261a22219f2b165_56635505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_34028659261a22219f2b165_56635505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_5434647561a22219f2c3f5_80038891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_5434647561a22219f2c3f5_80038891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_20070960061a22219f2ecf8_58747731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_20070960061a22219f2ecf8_58747731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_117096840961a22219f2fec2_99446448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_117096840961a22219f2fec2_99446448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_77041745461a22219f32b44_25653439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_77041745461a22219f32b44_25653439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_107058200561a22219f34427_89593228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_107058200561a22219f34427_89593228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="container">
                        <div class="row">
                            <div id="left-column" class="sidebar col-lg-3 col-md-4">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

                                    <div class="col-right">
                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/col-right-tab-detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                    </div>
                                <?php } elseif ((strpos($_smarty_tpl->tpl_vars['page']->value['page_name'],'smartblog') !== false)) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySmartBlogLeft"),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumn'),$_smarty_tpl ) );?>

                                <?php }?>
                            </div>
                        <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_41081570461a22219f3c707_04761643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <p>Hello world! This is HTML5 Boilerplate.</p>
                                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_149543926361a22219f3bdf4_70692836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_149543926361a22219f3bdf4_70692836',
  ),
  'content' => 
  array (
    0 => 'Block_41081570461a22219f3c707_04761643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div id="content-wrapper" class="left-column right-column col-md-6 flex-xs-first">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41081570461a22219f3c707_04761643', "content", $this->tplIndex);
?>

                            </div>
                        <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_147629123261a22219f3d854_08653795 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_147629123261a22219f3d854_08653795',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div id="right-column" class="sidebar col-lg-3 col-md-4">
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                                    <div class="col-right">
                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/col-right-tab-detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    </div>
                                <?php } elseif ((strpos($_smarty_tpl->tpl_vars['page']->value['page_name'],'smartblog') !== false)) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displaySmartBlogRight"),$_smarty_tpl ) );?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumn'),$_smarty_tpl ) );?>

                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php
}
}
/* {/block "right_column"} */
/* {block "mainmenu_mobile"} */
class Block_213669455961a2221a02e788_05990486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'mainmenu_mobile' => 
  array (
    0 => 'Block_213669455961a2221a02e788_05990486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="mobile_top_menu_wrapper" class="hidden-md-up">
        <div class="content">
            <div id="_mobile_verticalmenu"></div>
        </div>
    </div>
<?php
}
}
/* {/block "mainmenu_mobile"} */
/* {block "stickymenu_bottom_mobile"} */
class Block_121595204461a2221a04bdc7_09754363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stickymenu_bottom_mobile' => 
  array (
    0 => 'Block_121595204461a2221a04bdc7_09754363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="stickymenu_bottom_mobile">
            <div class="row align-items-center justify-content-center hidden-md-up text-center no-gutters">
                <div class="stickymenu-item col">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><i class="icon-house"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</span></a>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_bottom_nav_wishlist_disable']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_bottom_nav_wishlist_disable'] == 1) {?>
                    <div class="stickymenu-item col">
                        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('novblockwishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="zmdi zmdi-favorite-outline"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</span></a>
                    </div>
                <?php }?>
                <div class="stickymenu-item col">
                    <div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"></div>
                </div>
                <?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_bottom_nav_setting_disable']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_bottom_nav_setting_disable'] == 1) {?>
                    <div class="stickymenu-item col">
                        <a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i class="icon-settings"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','d'=>'Shop.Theme.Layout'),$_smarty_tpl ) );?>
</span></a>
                    </div>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_on_top_disable']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_on_top_disable'] == 1) {?>
                    <div class="stickymenu-item col"><div id="_mobile_back_top"></div></div>
                    <?php }?>
            </div>
        </div>
    <?php
}
}
/* {/block "stickymenu_bottom_mobile"} */
/* {block "form_buttons"} */
class Block_205194434861a2221a06c604_63719079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_205194434861a2221a06c604_63719079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <button class="btn btn-primary form-control-submit mb-30" data-link-action="save-customer" type="submit">
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 
                                                    </button>
                                                <?php
}
}
/* {/block "form_buttons"} */
/* {block 'javascript_bottom'} */
class Block_10007990461a2221a06f355_90269056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_10007990461a2221a06f355_90269056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_83226434261a2221a070f50_56699203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_83226434261a2221a070f50_56699203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
