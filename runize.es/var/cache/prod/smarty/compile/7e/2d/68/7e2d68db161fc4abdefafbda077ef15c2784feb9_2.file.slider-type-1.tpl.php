<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:06
  from '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Image_Gallery/slider-type-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c76ad9525_72485326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e2d68db161fc4abdefafbda077ef15c2784feb9' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/modules/novmanagevcaddons/views/templates/front/Nov_Image_Gallery/slider-type-1.tpl',
      1 => 1637518119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c76ad9525_72485326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="nov_image_gallery<?php if (!empty($_smarty_tpl->tpl_vars['el_class']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['el_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <div class="nov-productslick slick-slider row no-flow spacing-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spacing']->value, ENT_QUOTES, 'UTF-8');?>
 mt-5" data-rows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['number_row']->value, ENT_QUOTES, 'UTF-8');?>
"  data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xl']->value, ENT_QUOTES, 'UTF-8');?>
" data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['md']->value, ENT_QUOTES, 'UTF-8');?>
" data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xs']->value, ENT_QUOTES, 'UTF-8');?>
" data-arrows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_arrows']->value, ENT_QUOTES, 'UTF-8');?>
" data-dots="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['show_dots']->value, ENT_QUOTES, 'UTF-8');?>
" data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autoplay']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
            <div class="item image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['column']->value, ENT_QUOTES, 'UTF-8');?>
 mb-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spacing']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->tpl_vars['image']->value;?>

            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="image-gallery-title"></h4>
                    <button type="button" class="close" data-dismiss="modal"><i class="zmdi zmdi-close"></i></button>
                </div>
                <div class="modal-body pt-0">
                    <img id="image-gallery-image" class="img-fluid" src="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="zmdi zmdi-chevron-left"></i>
                    </button>

                    <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="zmdi zmdi-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
