{*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<section class="nov-productlist special-products">
    <h2 class="title_block">
    {l s='On sale' d='Shop.Theme.Catalog'}
    </h2>
    <div class="block_content">
        <div class="product_list grid row">
        {include file='_partials/layout/items/item_one.tpl' class_item='col-xl-cus-5 col-md-4 col-sm-4 col-6' number_row=1 products=$products}
        </div>
    </div>
    <div class="d-flex justify-content-center">
    	<a class="btn btn-default all-product-link" href="{$allSpecialProductsLink}">{l s='All sale products' d='Shop.Theme.Catalog'}</a>
	</div>
</section>
