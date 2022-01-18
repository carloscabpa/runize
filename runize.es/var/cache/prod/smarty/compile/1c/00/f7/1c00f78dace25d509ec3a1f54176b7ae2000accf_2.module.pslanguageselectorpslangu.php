<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from 'module:pslanguageselectorpslangu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c773992d1_21588820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:pslanguageselectorpslangu',
      1 => 1637518137,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c773992d1_21588820 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-1' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-2' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-4' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-5' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-6' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-9' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-12' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-14' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-15' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-16' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-17' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-18' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-19' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-22' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-27' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-28' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-29' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-30' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-32' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-34' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-35' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-36' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-37' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-38' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-39' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-40' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-41') {?>
<div id="_desktop_language_selector" class="language-selector groups-selector hidden-sm-down">
  <div class="title_header">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  </div>
  <ul class="list-inline">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
      <li class="list-inline-item<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> current<?php }?>">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
"><img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['img_lang']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11"/></a>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php } else { ?>
<div id="_desktop_language_selector" class="language-selector groups-selector hidden-sm-down language-selector-dropdown">
  <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?>
            <span class="expand-more">
              <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['img_lang']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11"/>
            </span>
        <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <div class="language-list dropdown-menu">
    <div class="language-list-content text-left">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
          <div class="language-item<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> current flex-first<?php }?>">
            <div <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?> >
              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl ) );?>
">
                <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['img_lang']->value;
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['id_lang'], ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
" width="16" height="11"/>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
              </a>
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div>
<?php }
}
}
