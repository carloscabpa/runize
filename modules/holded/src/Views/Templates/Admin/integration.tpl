<div class="panel">
    <div class="panel-heading">
        {l s='INTEGRATION WITH THE API' mod='holded'}
    </div>
    <form id="configuration_form" class="defaultForm form-horizontal holded"
          action="{$url_form|escape:'html':'UTF-8'}"
          method="post" enctype="multipart/form-data" novalidate=""
    >
        <div class="form-wrapper">
            <div class="form-group">
                <label class="control-label col-lg-3 required">
                    {l s='API key' mod='holded'}
                </label>
                <div class="col-lg-4">
                    <input type="text" name="holdedkey" id="holdedkey" class="" required="required" value="{$api_key|escape:'html':'UTF-8'}">
                    <p class="help-block">
                        {l s='You can create your own Holded Api Key on your Holded account in API section /api' mod='holded'}
                    </p>
                </div>
                <div>
                    <button type="submit" class="btn btn-default">
                        {l s='Save' mod='holded'}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

