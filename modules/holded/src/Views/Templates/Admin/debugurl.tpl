<div class="panel">
    <div class="panel-heading">
        {l s='DEBUG URL' mod='holded'}
    </div>
    <form id="configuration_form" class="defaultForm form-horizontal holded"
          action="{$url_form|escape:'html':'UTF-8'}"
          method="post" enctype="multipart/form-data" novalidate=""
    >
        <div class="form-wrapper">
            <div class="form-group">
                <label class="control-label col-lg-3 required">
                    {l s='DEBUG URL' mod='holded'}
                </label>
                <div class="col-lg-4">
                    <input type="text" name="holdeddebugurl" id="holdeddebugurl" class="" required="required" value="{$debug_url|escape:'html':'UTF-8'}">
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

