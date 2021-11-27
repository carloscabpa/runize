<?php
/* Smarty version 3.1.33, created on 2021-11-27 13:18:36
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_CategoryTabs/categorytab-default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a2221c7d9767_49593665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07172efee33396fb5af9da9f43f4c383ca434878' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_CategoryTabs/categorytab-default.tpl',
      1 => 1637518119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a2221c7d9767_49593665 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>
    <div class="nov-category-productlist<?php if (isset($_smarty_tpl->tpl_vars['class']->value) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="block-product clearfix">
            <?php if (isset($_smarty_tpl->tpl_vars['title']->value) && !empty($_smarty_tpl->tpl_vars['title']->value)) {?>
                <h2 class="title_block text-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_align']->value, ENT_QUOTES, 'UTF-8');?>
 style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_style']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

                    <?php if (isset($_smarty_tpl->tpl_vars['sub_title']->value) && !empty($_smarty_tpl->tpl_vars['sub_title']->value)) {?>
                        <span class="sub_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sub_title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                </h2>
            <?php }?>
            <div class="nov-tabs d-flex flex-nowrap">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'category', false, 'k', 'categories', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index'];
?>
                    <a href="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value, ENT_QUOTES, 'UTF-8');?>
category<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
-panel" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value, ENT_QUOTES, 'UTF-8');?>
category<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
-tab" class="tab col <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] : null)) {?>active<?php }?>">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['image_urls'], 'image_url');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image_url']->value) {
?>
                            <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <div class="title_category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
                    </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
            </div>

            <div class="nov-panels">
               <?php $_smarty_tpl->_assignInScope('xy', 300);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'category', false, 'k', 'categories', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['index'];
?>
                <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab']->value, ENT_QUOTES, 'UTF-8');?>
category<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
-panel" class="panel <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['first'] : null)) {?>active<?php }?>">
                    <?php $_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['category']->value['products']);?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                        <div class="nov-productslick row spacing-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spacing']->value, ENT_QUOTES, 'UTF-8');?>
 product_list grid slick-slider" data-rows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number_row']->value, ENT_QUOTES, 'UTF-8');?>
" data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xl']->value, ENT_QUOTES, 'UTF-8');?>
" data-lg="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lg']->value, ENT_QUOTES, 'UTF-8');?>
" data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['md']->value, ENT_QUOTES, 'UTF-8');?>
" data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xs']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['nov_dir']->value)."./templates/_partials/layout/items/item_five_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_item'=>'pl-15 pr-15 pl-xs-5 pr-xs-5','margin_bottom'=>$_smarty_tpl->tpl_vars['spacing']->value), 0, true);
?>
                        </div>
                        <?php } else { ?>
                        <div id="<?php echo $_smarty_tpl->tpl_vars['name_tab']->value;?>
" class="product_list">
                            <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products at this time.','mod'=>'novmanagevcaddons'),$_smarty_tpl ) );?>
</p>
                        </div>
                    <?php }?>
                   
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
