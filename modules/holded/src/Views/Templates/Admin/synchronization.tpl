{*
* 2007-2016 PrestaShop
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="panel">
    <h3>{l s='SYNCHRONIZE YOUR STORE EXISTING ORDERS WITH HOLDED' mod='holded'}</h3>

    <div class="alert alert-info">
        <ul class="list-unstyled">
            <li>{l s='If you have just started and have no invoices or confirmed payments, you can skip this step.' mod='holded'}</li>
            <li>{l s='However, if you have existing invoices in your Prestashop, you can synchronize them with Holded to have all your income centralized in one place. Holded automatically copies the serial numbers from your existing invoices.' mod='holded'}</li>
        </ul>
    </div>
    <div class="panel-footer">
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncCurrentYear" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='Synchronize current year' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncPreviousYear" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='Synchronize last year' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="sync2PreviousYear" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='Synchronize two years ago' mod='holded'}
            </button>
        </form>
    </div>
    <div class="panel-footer">
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="submitSynchronization" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='Synchronize now' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncQuarter1" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='Synchronize first quarter' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncQuarter2" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='Synchronize second quarter' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncQuarter3" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='Synchronize third quarter' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncQuarter4" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='Synchronize fourth quarter' mod='holded'}
            </button>
        </form>
    </div>
    <div class="panel-footer">
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncJanuary" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='January' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncFebruary" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='February' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncMarch" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='March' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncApril" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='April' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncMay" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='May' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncJune" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='June' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncJuly" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='July' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncAugust" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='August' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncSeptember" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='September' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncOctober" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='October' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncNovember" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='November' mod='holded'}
            </button>
        </form>
        <form method="post" action="{$url_form|escape:'html':'UTF-8'}" class="defaultForm form-horizontal">
            <button class="btn btn-default pull-left" name="syncDecember" value="1" type="submit"
                    style="margin-right: 10px;">
                <i class="process-icon-update"></i> {l s='December' mod='holded'}
            </button>
        </form>
    </div>
</div>
