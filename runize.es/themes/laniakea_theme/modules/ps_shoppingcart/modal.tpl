<div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><i class="zmdi zmdi-check"></i>{l s='Product successfully added to your shopping cart' d='Shop.Theme.Checkout'}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="material-icons close">close</i>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 divide-right">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img class="product-image img-fluid" src="{$product.cover.bySize.cart_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
              </div>
              <div class="col-md-8">
                <div class="product-name"><a href="{$product.url}">{$product.name}</a></div>
                <div class="product-price">{$product.price}</div>
                {hook h='displayProductPriceBlock' product=$product type="unit_price"}
                {foreach from=$product.attributes item="property_value" key="property"}
                  <span>{$property}: {$property_value}</span><br>
                {/foreach}
                <span>{l s='Quantity:' d='Shop.Theme.Checkout'}&nbsp;{$product.cart_quantity}</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="cart-content mb-25">
              {if $cart.products_count > 1}
                <p class="cart-products-count">{l s='There are %products_count% items in your cart.' sprintf=['%products_count%' => $cart.products_count] d='Shop.Theme.Checkout'}</p>
              {else}
                <p class="cart-products-count">{l s='There is %product_count% item in your cart.' sprintf=['%product_count%' =>$cart.products_count] d='Shop.Theme.Checkout'}</p>
              {/if}
              <p class="mb-5">{l s='Total products:' d='Shop.Theme.Checkout'}&nbsp;<span class="font-weight-bold">{$cart.subtotals.products.value}</span></p>
              <p class="mb-5">{l s='Total shipping:' d='Shop.Theme.Checkout'}&nbsp;<span class="font-weight-bold">{$cart.subtotals.shipping.value} {hook h='displayCheckoutSubtotalDetails' subtotal=$cart.subtotals.shipping}</span></p>
              {if $cart.subtotals.tax}
              	<p class="mb-5">{$cart.subtotals.tax.label}&nbsp;<span class="font-weight-bold">{$cart.subtotals.tax.value}</span></p>
              {/if}
              <p>{l s='Total:' d='Shop.Theme.Checkout'}&nbsp;<span class="font-weight-bold">{$cart.totals.total.value}</span> {$cart.labels.tax_short}</p>
            </div>
            <a href="{$link->getPageLink('order')|escape:'html'}" class="btn btn-primary mb-5"><i class="fa fa-check-square-o" aria-hidden="true"></i>{l s='Proceed to check out' d='Shop.Theme.Checkout'}</a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">{l s='Continue shopping' d='Shop.Theme.Actions'}</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
