<?php
/* Smarty version 3.1.33, created on 2021-11-27 19:44:06
  from '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/layout/items/item_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61a27c76a72b57_69618676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9913e8e22df9d59089f9790767d6b69345597c89' => 
    array (
      0 => '/homepages/34/d802225033/htdocs/runize.es/themes/vinova_nuranium/templates/_partials/layout/items/item_list.tpl',
      1 => 1637518137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a27c76a72b57_69618676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'];
?>
<div class="item pl-15 pr-15">
	<div class="product-miniature js-product-miniature item-list row no-gutters<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first'] : null)) {?> first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] : null)) {?> last_item<?php }?>" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
		<div class="thumbnail-container col-6">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153514895461a27c76a3d989_67326797', 'product_thumbnail');
?>

			<?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_label']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_label'] == 1) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54494497161a27c76a5be50_36385566', 'product_flags');
?>

			<?php }?>
		</div>
		<div class="product-description col-6 d-flex align-items-center">
			<div class="block_description position-relative">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28365730861a27c76a61117_10481647', 'product_name');
?>

				<?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_rate']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_rate'] == 1) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				<?php }?>
				<div class="product-groups" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
					<div class="product-group-price">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198664598261a27c76a639d8_93525354', 'product_price_and_shipping');
?>

					</div>
					<?php $_smarty_tpl->_assignInScope('link', Context::getContext()->link);?>
					<?php $_smarty_tpl->_assignInScope('static_token', Tools::getToken(false));?>
					<div class="product-buttons d-flex align-items-center">
						<?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_addtocart']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_addtocart'] == 1) {?>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'] != 0) {?>
									<a class="add-to-cart" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><i class="zmdi zmdi-check"></i></a>
								<?php } else { ?>
									<form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'),'html' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
										<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
										<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
										<input type="hidden" name="qty" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
">
										<a class="add-to-cart show_popup has-text align-self-center" href="#" data-button-action="add-to-cart">
											<span class="loading"><i class="fa fa-spinner fa-spin"></i></span><i class="novicon-cart"></i>
										</a>
									</form>
								<?php }?>
							<?php } else { ?>
								<form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'),'html' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
										<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
										<input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
										<input type="hidden" name="qty" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
">
										<button class="add-to-cart show_popup has-text btn btn-link d-flex justify-content-center" href="#" data-button-action="add-to-cart" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled <?php }?>>
											<span class="loading"><i class="fa fa-spinner fa-spin"></i></span><i class="novicon-cart mr-0"></i>
										</button>
									</form>
							<?php }?>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_wishlist']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_wishlist'] == 1) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_quickview']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_cat_product_quickview'] == 1) {?>
						<a href="#" class="quick-view hidden-sm-down pt-bt" data-link-action="quickview">
							<i class="zmdi zmdi-search"></i>
						</a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
/* {block 'product_thumbnail'} */
class Block_153514895461a27c76a3d989_67326797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_153514895461a27c76a3d989_67326797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_second_img']) && $_smarty_tpl->tpl_vars['novconfig']->value['novthemeconfig_second_img'] == 1) {?>
					<?php if ((count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) && $_smarty_tpl->tpl_vars['product']->value['cover']) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail two-image">
							<img
							class="img-fluid image-cover nov-lazyload"
							data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
							src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
							alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
							width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
px"
							height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
px"
							>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] != '1') {?>
							<img 
							class="img-fluid image-secondary nov-lazyload"
							src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
							alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
							data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
							width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
							height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
							>
							<?php break 1;?>
							<?php }?>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</a>
					<?php } elseif ((count($_smarty_tpl->tpl_vars['product']->value['images']) == 1) && $_smarty_tpl->tpl_vars['product']->value['cover']) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail one-image">
							<img class="img-fluid image-cover nov-lazyload" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
px" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
px">
						</a>
					<?php } else { ?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail one-image">
						<img class="img-fluid image-cover nov-lazyload" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
px" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
px">
					</a>
					<?php }?>
				<?php } else { ?>
					<?php if ((count($_smarty_tpl->tpl_vars['product']->value['images']) >= 1) && $_smarty_tpl->tpl_vars['product']->value['cover']) {?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail one-image">
						<img class="img-fluid image-cover nov-lazyload" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
px" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
px">
					</a>
					<?php } else { ?>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail one-image">
						<img class="img-fluid image-cover nov-lazyload" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
px" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
px">
					</a>
					<?php }?>
				<?php }?>
			<?php } else { ?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"/>
				</a>
			<?php }?>
			<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_54494497161a27c76a5be50_36385566 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_54494497161a27c76a5be50_36385566',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'discount') {?>
					<?php if (($_smarty_tpl->tpl_vars['product']->value['has_discount'] && $_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage')) {?>
						<div class="product-flags <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</div>
					<?php } else { ?>
						<div class="product-flags <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</div>
					<?php }?>
				<?php } else { ?>
					<div class="product-flags <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_28365730861a27c76a61117_10481647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_28365730861a27c76a61117_10481647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></div>
				<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_198664598261a27c76a639d8_93525354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_198664598261a27c76a639d8_93525354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
						<div class="product-price-and-shipping">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

							<span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

							<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
							<?php }?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

						</div>
						<?php }?>
						<?php
}
}
/* {/block 'product_price_and_shipping'} */
}
