<div id="_desktop_cart">
  <div class="blockcart cart-preview" data-refresh-url="{$refresh_url}">
    {if $novconfig.novthemeconfig_header_style == 'style-18'}
      <div class="open_header_cart_canvas hidden-sm-down">
        <i class="icon_cart"></i>
        <div class="cart-products-count">{$cart.products_count}</div>
      </div>
    {/if}
      <div class="header-cart{if $novconfig.novthemeconfig_header_style == 'style-18'} hidden-md-up{/if}">
        <div class="cart-left">
          <div class="shopping-cart">
              <i class="bi bi-bag font-size-15"></i>
              {l s='Cart Icon' d='Shop.Theme.Checkout'}
          </div>
        </div>
        <div class="cart-right">
          <span class="title-cart title_icon d-md-none d-lg-none d-xl-none">{l s='My Cart' d='Shop.Theme.Checkout'}</span>
        </div>
        <span class="cart-products-count">{$cart.products_count}</span>
        <span class="label-items d-xs-none">{l s='items' d='Shop.Theme.Checkout'}</span>
      </div>
    <div class="cart_block{if $novconfig.novthemeconfig_header_style == 'style-18'} header-cart-canvas{/if}{if $cart.products|count > 3} has-scroll{/if}">
      {if $novconfig.novthemeconfig_header_style == 'style-18'}<div class="close_canvas cart hidden-sm-down"><i class="zmdi zmdi-close"></i></div>{/if}
      <div class="cart-block-content">
        {if $cart.products_count > 0}
          <ul>
            {foreach from=$cart.products item=product}
              <li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</li>
            {/foreach}
          </ul>
          <div class="cart-total">
            <div>
              <span class="label">{$cart.totals.total.label}</span>
              <span class="value">{$cart.totals.total.value}</span>
            </div>
          </div>
          <div class="cart-buttons">
            {assign var="link" value = Context::getContext()->link }
            <a href="{$link->getPageLink('order')|escape:'html'}" class="btn btn-primary mb-5 btn-checkout"><i class="fa fa-check-square-o" aria-hidden="true"></i> {l s='Check out' d='Shop.Theme.Actions'}</a>
            <a href="{$cart_url}" class="btn btn-primary btn-cart">{l s='View cart' d='Shop.Theme.Actions'}</a>
          </div>
        {else}
          <div class="no-items">
              {l s='No products in the cart' d='Shop.Theme.Checkout'}
          </div>
        {/if}
      </div>
    </div>
  </div>
</div>