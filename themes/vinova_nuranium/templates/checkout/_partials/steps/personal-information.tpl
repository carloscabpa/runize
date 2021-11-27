{extends file='checkout/_partials/steps/checkout-step.tpl'}

{block name='step_content'}

    <ul class="nav nav-inline m-y-2">
      <li class="nav-item">
        <a class="nav-link {if !$show_login_form}active{/if}" data-toggle="tab" href="#checkout-guest-form" role="tab">
          {if $guest_allowed}
            {l s='Order as a guest' d='Shop.Theme.Checkout'}
          {else}
            {l s='Create an account' d='Shop.Theme.Customeraccount'}
          {/if}
        </a>
      </li>

      <li class="nav-item">
        <a
          class="nav-link {if $show_login_form}active{/if}"
          data-link-action="show-login-form"
          data-toggle="tab"
          href="#checkout-login-form"
          role="tab"
        >
          {l s='Sign in' d='Shop.Theme.Actions'}
        </a>
      </li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane {if !$show_login_form}active{/if}" id="checkout-guest-form" role="tabpanel">
        {render file='checkout/_partials/customer-form.tpl' ui=$register_form guest_allowed=$guest_allowed}
      </div>
      <div class="tab-pane {if $show_login_form}active{/if}" id="checkout-login-form" role="tabpanel">
        <div class="block-form-login">
          {hook h='displayLoginSocialAnywhere'}
          <p class="text-center mb-15">{l s='Or Insert your account information:' d='Shop.Theme.Checkout'}</p>
          {render file='checkout/_partials/login-form.tpl' ui=$login_form}
        </div>
      </div>
    </div>

{/block}
