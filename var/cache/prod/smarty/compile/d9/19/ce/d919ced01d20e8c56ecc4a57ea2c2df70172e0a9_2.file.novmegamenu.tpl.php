<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmegamenu/views/templates/hook/novmegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c7722ea11_40787542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd919ced01d20e8c56ecc4a57ea2c2df70172e0a9' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmegamenu/views/templates/hook/novmegamenu.tpl',
      1 => 1637518120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c7722ea11_40787542 (Smarty_Internal_Template $_smarty_tpl) {
?><nav id="nov-megamenu" class="<?php if (isset($_smarty_tpl->tpl_vars['menu_type']->value) && $_smarty_tpl->tpl_vars['menu_type']->value == 'vertical') {?>nov-megamenu_vertical<?php } else { ?>nov-megamenu_default<?php }?> clearfix">
    <div id="megamenu" class="nov-megamenu clearfix">
        <?php echo $_smarty_tpl->tpl_vars['mgmenu']->value;?>

    </div>
</nav><?php }
}
