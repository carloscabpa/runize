{if $logged}
  <div class="list">
    <a class="account" href="{$link->getPageLink('my-account', true)}" title="{l s='View my customer account' d='Modules.Shop.Theme.Customeraccount'}" rel="nofollow"><i class="fa fa-cog"></i><span>{$customerName}</span></a>
  </div>
  <div class="list">
    <a class="logout"  href="{$link->getPageLink('index', true, null, 'mylogout')}" rel="nofollow" title="{l s='Log me out' d='Modules.Shop.Theme.Customeraccount'}"><i class="fa fa-sign-out"></i><span>{l s='Sign out' d='Modules.Customersignin'}</span></a>
  </div>
{else}
  <div class="list">
    <a class="login" href="{$my_account_url}" rel="nofollow" title="{l s='Log in to your customer account' d='Modules.Shop.Theme.Customeraccount'}"><i class="fa fa-sign-in"></i><span>{l s='Sign in' d='Modules.Customersignin'}</span></a>
  </div>
  <div class="list">
    <a class="register" href="{$urls.pages.register}" rel="nofollow" title="{l s='Register Account' d='Modules.Customersignin'}"><i class="fa fa-user"></i><span>{l s='Register Account' d='Modules.Customersignin'}</span></a>
  </div>
{/if}

<div class="list">
  <a class="check-out" href="{$link->getPageLink('order')|escape:'html'}" rel="nofollow" title="{l s='Checkout' d='Modules.Customersignin'}"><i class="material-icons">check_circle</i><span>{l s='Checkout' d='Modules.Customersignin'}</span></a>
</div>