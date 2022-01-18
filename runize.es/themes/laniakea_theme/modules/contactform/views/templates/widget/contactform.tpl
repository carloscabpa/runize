<section class="contact-form">
  <form action="{$link->getPageLink('contact')|escape:'html':'UTF-8'}" method="post" {if $contact.allow_file_upload}enctype="multipart/form-data"{/if}>

    {if $notifications}
      <div class="col-xs-12 alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}">
        <ul>
          {foreach $notifications.messages as $notif}
            <li>{$notif}</li>
          {/foreach}
        </ul>
      </div>
    {/if}

    <section class="form-fields">
      <div class="form-group row no-flow">
        <div class="col-md-6">
          <input
            class="form-control"
            name="name"
            placeholder="{l s='Your name' d='Shop.Forms.Help'}"
          >
        </div>
        <div class="col-md-6">
          <input
            class="form-control"
            name="from"
            type="email"
            value="{$contact.email}"
            placeholder="{l s='Your email' d='Shop.Forms.Help'}"
          >
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-6 form-select">
          <select name="id_contact" class="form-control form-control-select">
            {foreach from=$contact.contacts item=contact_elt}
              <option value="{$contact_elt.id_contact}">{$contact_elt.name}</option>
            {/foreach}
          </select>
        </div>
        {if $contact.allow_file_upload}
          <div class="col-md-6 form-filestyle">
            <input type="file" name="fileUpload" class="filestyle">
          </div>
        {/if}
      </div>


      {if $contact.orders}
        <div class="col-md-6">
          <select name="id_order" class="form-control form-control-select">
            <option value="">{l s='Select reference' d='Shop.Forms.Help'}</option>
            {foreach from=$contact.orders item=order}
              <option value="{$order.id_order}">{$order.reference}</option>
            {/foreach}
          </select>
        </div>
      {/if}

      <div class="form-group row">
        <div class="col-md-12">
          <textarea
            class="form-control"
            name="message"
            placeholder="{l s='Message' d='Shop.Forms.Help'}"
            rows="8"
          >{if $contact.message}{$contact.message}{/if}</textarea>
        </div>
      </div>

    </section>

    <footer class="form-footer">
      <style>
        input[name=url] {
          display: none !important;
        }
      </style>
      <input type="text" name="url" value=""/>
      <input type="hidden" name="token" value="{$token}" />      
      <button class="btn" type="submit" name="submitMessage">
        <img class="img-fluid" src="{_THEME_IMG_DIR_}img-send.png" alt="img">
        <span>{l s='Send message' d='Shop.Theme.Actions'}</span>
      </button>
    </footer>
  </form>
</section>
