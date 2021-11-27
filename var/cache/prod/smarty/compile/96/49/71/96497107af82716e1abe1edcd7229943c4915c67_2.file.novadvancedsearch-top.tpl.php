<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:07
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/modules/novadvancedsearch/novadvancedsearch-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c772f22d8_81714872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96497107af82716e1abe1edcd7229943c4915c67' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/modules/novadvancedsearch/novadvancedsearch-top.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./category-tree-branch.tpl' => 1,
  ),
),false)) {
function content_61a27c772f22d8_81714872 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- block seach mobile -->
<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)) {?>
    <div class="input_search" data-role="fieldcontain">
        <form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('novadvancedsearch','result'),'html' )), ENT_QUOTES, 'UTF-8');?>
" id="searchbox">
            <input type="hidden" name="controller" value="search" />
            <input type="hidden" name="orderby" value="position" />
            <input type="hidden" name="orderway" value="desc" />
            <input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Modules.Novadvancedsearch.Search'),$_smarty_tpl ) );?>
" value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" />
        </form>
    </div>
<?php } else { ?>
    <!-- Block search module TOP -->

    <div id="desktop_search_content"
         class="<?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-1' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-2' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-3' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-4' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-9' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-10' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-11' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-12' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-11' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-13' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-14' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-15' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-17' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-19' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-20' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-21' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-22' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-23' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-24') {?>style_1<?php } else { ?>style_2<?php }?>" 
         data-id_lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_lang']->value, ENT_QUOTES, 'UTF-8');?>
" 
         data-ajaxsearch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajaxsearch']->value, ENT_QUOTES, 'UTF-8');?>
" 
         data-novadvancedsearch_type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novadvancedsearch_type']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-instantsearch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instantsearch']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-search_ssl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_ssl']->value, ENT_QUOTES, 'UTF-8');?>
"
         data-link_search_ssl="<?php if ($_smarty_tpl->tpl_vars['search_ssl']->value == 1) {
echo htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true)), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink('search')), ENT_QUOTES, 'UTF-8');
}?>"
         data-action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('novadvancedsearch','result'),'html' )), ENT_QUOTES, 'UTF-8');?>
">
        <div class="toggle-search"><i class="icon-header-search"></i>
            <?php if (isset($_smarty_tpl->tpl_vars['class_homepage']->value) && $_smarty_tpl->tpl_vars['class_homepage']->value == 'home-40') {?>
                <span class="d-block title_icon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Modules.Novadvancedsearch.Search'),$_smarty_tpl ) );?>
</span>
            <?php }?>
        </div>
        <form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('novadvancedsearch','result'),'html' )), ENT_QUOTES, 'UTF-8');?>
" id="searchbox" class="form-novadvancedsearch">
            <input type="hidden" name="fc" value="module">
            <input type="hidden" name="module" value="novadvancedsearch">
            <input type="hidden" name="controller" value="result">
            <input type="hidden" name="orderby" value="position" />
            <input type="hidden" name="orderway" value="desc" />
            <input type="hidden" name="id_category" class="id_category" value="0" />
            <div class="input-group">
                <div class="input-group-btn nov_category_tree hidden-sm-down">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" value="" aria-expanded="false">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'categories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                    </button>
                    <ul class="dropdown-menu list-unstyled">
                        <li class="dropdown-item <?php if (!isset($_smarty_tpl->tpl_vars['id_category']->value) || $_smarty_tpl->tpl_vars['id_category']->value == 0) {?>active<?php }?>" data-value="0"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','d'=>'Modules.Novadvancedsearch.Search'),$_smarty_tpl ) );?>
</span></li>
                        <li class="dropdown-item <?php if (!isset($_smarty_tpl->tpl_vars['id_category']->value) || $_smarty_tpl->tpl_vars['id_category']->value == $_smarty_tpl->tpl_vars['novcategoriesTree']->value['id']) {?>active<?php }?>" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novcategoriesTree']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['novcategoriesTree']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></li>
                                <?php if (isset($_smarty_tpl->tpl_vars['novcategoriesTree']->value['children'])) {?>
                            <ul class="list-unstyled pl-5">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['novcategoriesTree']->value['children'], 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                                    <li class="dropdown-item font-weight-bold" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['id_category']->value) && $_smarty_tpl->tpl_vars['id_category']->value == $_smarty_tpl->tpl_vars['child']->value['id']) {?>selected<?php }?>>
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                                    </li>
                                    <?php $_smarty_tpl->_subTemplateRender("file:./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'lever'=>1), 0, true);
?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        <?php }?>
                    </ul>
                </div>

                <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search_query" value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if ($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-20' || $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_header_style'] == 'style-21') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Modules.Novadvancedsearch.Search'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter search keywords','d'=>'Shop.Theme.Search'),$_smarty_tpl ) );
}?>"/>
                <span class="btn_search">
                    <button type="submit" name="submit_search"> <?php if (isset($_smarty_tpl->tpl_vars['class_homepage']->value) && $_smarty_tpl->tpl_vars['class_homepage']->value == 'home-40') {?><i class="zmdi zmdi-forward"></i><?php } else { ?><i class="material-icons">search</i><?php }?></button>
                </span>
            </div>
        </form>
    </div>
<?php }?>

<!-- /Block search module TOP -->
<?php }
}
