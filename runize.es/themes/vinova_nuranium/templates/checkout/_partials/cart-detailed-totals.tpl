{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='cart_detailed_totals'}
<div class="cart-detailed-totals">
  <div class="cart-summary-products">
    <div class="summary-label">{l s='There are %cart_item% in your cart' sprintf=['%cart_item%' => $cart.summary_string] d='Shop.Theme.Checkout'}</div>
  </div>

  <div class="group-price">
    {foreach from=$cart.subtotals item="subtotal"}
      {if $subtotal.value && $subtotal.type !== 'tax'}
        <div class="cart-summary-line" id="cart-subtotal-{$subtotal.type}">
          <span class="label{if 'products' === $subtotal.type} js-subtotal{/if}">
            {if 'products' == $subtotal.type}
              {l s="Total products" d='Shop.Theme.Checkout'}:
            {else}
              {l s='Total %label_subtotal%' sprintf=['%label_subtotal%' => $subtotal.label] d='Shop.Theme.Checkout'}:
            {/if}
          </span>
          <span class="value">{$subtotal.value}</span>
          {if $subtotal.type === 'shipping'}
              <div><small class="value">{hook h='displayCheckoutSubtotalDetails' subtotal=$subtotal}</small></div>
          {/if}
        </div>
      {/if}
    {/foreach}
    {if $cart.subtotals.tax.label != ""}
    <div class="cart-summary-line">
      <span class="label">{$cart.subtotals.tax.label}:</span>
      <span class="value">{$cart.subtotals.tax.value}</span>
    </div>
    {/if}
  </div>

  {block name='cart_voucher'}
    {include file='checkout/_partials/cart-voucher.tpl'}
  {/block}

  <div class="cart-summary-line cart-total{if empty($cart.vouchers.allowed) || $cart.discounts|count < 1} has_border{/if}">
    <div class="d-flex">
      <span>
        <span class="label">{$cart.totals.total.label}</span>
        <span class="font-small">{$cart.labels.tax_short}</span>
      </span>
      <span class="value ml-auto label">{$cart.totals.total.value}</span>
    </div>
  </div>
</div>
{/block}
