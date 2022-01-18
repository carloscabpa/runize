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
<!doctype html>
<html lang="{$language.iso_code}">
	<head>
	  {block name='head'}
	    {include file='_partials/head.tpl'}
	  {/block}
	</head>

	<body id="{$page.page_name}" class="{$page.body_classes|classnames}">
		<header id="header" class="header-{$novconfig.novthemeconfig_header_style}">
		  {block name='header'}
		    {include file='_partials/header.tpl'}
		  {/block}
		</header>
		<section id="wrapper">
		    {block name='breadcrumb'}
		    	{include file='_partials/breadcrumb.tpl'}
		    {/block}
		    {block name='content'}
			    <section id="content" class="mt-75 pb-80">
					{if $novconfig.novthemeconfig_contact_layout == '1'}
				    	<div class="container">
							<div class="title_page_contact">{l s='Contact Us' d='Shop.Theme.Errors'}</div>
							<div class="row">
								<div class="col-md-8">
								  	{widget name="contactform"}			
								</div>
								<div class="infomation-store col-md-4">
									{widget name="ps_contactinfo" hook='displayLeftColumn'}
									<div class="mt-50">
										{include file="_elements/social-list.tpl"}
									</div>
								</div>
							</div>
						</div>
						<div class="google-map">
							<div id="nov-map-contact"></div>
						</div>
					{else}
						<div class="container">
							<div class="title_page_contact">{l s='Contact Us' d='Shop.Theme.Contact'}</div>
							<div class="infomation-store mb-40">
								{widget name="ps_contactinfo" hook='displayLeftColumn'}
								
							</div>
							<div class="google-map">
								<div id="nov-map-contact"></div>
							</div>
							<div class="row mt-45">
								<div class="col-md-4">
									<div class="title_page_contact mb-20">{l s='Write a message' d='Shop.Theme.Contact'}</div>
									<p>{l s='If you got any questions, please do not hesitate to send us a message. We reply within 24 hours !' d='Shop.Theme.Contact'}</p>
									<div class="mt-35">
										{include file="_elements/social-list.tpl"}
									</div>
								</div>
								<div class="col-md-8">
								  	{widget name="contactform"}
								</div>
								
							</div>
							
							
						</div>
					{/if}
			    </section>
		    {/block}
			
			{if isset($novconfig.novthemeconfig_contact_desc) && $novconfig.novthemeconfig_contact_desc}
			<div class="desc-store text-center">
				{$novconfig.novthemeconfig_contact_desc nofilter}
			</div>
			{/if}
		</section>

		{if $novconfig.novthemeconfig_footer_style}
		    {include file="_partials/layout/footer/`$novconfig.novthemeconfig_footer_style`.tpl"}
	    {else}
	        {include file='_partials/footer.tpl'}
	    {/if}

	    {block name='javascript_bottom'}
	     	{include file="_partials/javascript.tpl" javascript=$javascript.bottom}
	        <script>
	        	var store_latitude = {$novconfig.novthemeconfig_store_latitude};
	        	var store_longitude = {$novconfig.novthemeconfig_store_longitude};
		        {literal}
			      	function initMap() {
				      	var uluru = {lat: store_latitude, lng: store_longitude};
				      	var map = new google.maps.Map(document.getElementById('nov-map-contact'), {
			      	  zoom: 15,
			      	  center: uluru,
			      	  zoomControlOptions: {
			                position: google.maps.ControlPosition.LEFT_BOTTOM
			            },
			      	  styles: [
			              {
			                "elementType": "geometry",
			                "stylers": [
			                {
			                  "color": "#f5f5f5"
			                }
			                ]
			              },
			              {
			                "elementType": "labels.icon",
			                "stylers": [
			                {
			                  "visibility": "off"
			                }
			                ]
			              },
			              {
			                "elementType": "labels.text.fill",
			                "stylers": [
			                {
			                  "color": "#616161"
			                }
			                ]
			              },
			              {
			                "elementType": "labels.text.stroke",
			                "stylers": [
			                {
			                  "color": "#f5f5f5"
			                }
			                ]
			              },
			              {
			                "featureType": "administrative.land_parcel",
			                "elementType": "labels.text.fill",
			                "stylers": [
			                {
			                  "color": "#bdbdbd"
			                }
			                ]
			              },
			              {
			                "featureType": "poi",
			                "elementType": "geometry",
			                "stylers": [
			                {
			                  "color": "#eeeeee"
			                }
			                ]
			              },
			              {
			                "featureType": "poi",
			                "elementType": "labels.text.fill",
			                "stylers": [
			                {
			                  "color": "#757575"
			                }
			                ]
			              },
			              {
			                "featureType": "poi.park",
			                "elementType": "geometry",
			                "stylers": [
			                {
			                  "color": "#e5e5e5"
			                }
			                ]
			              },
			              {
			                "featureType": "poi.park",
			                "elementType": "labels.text.fill",
			                "stylers": [
			                {
			                  "color": "#9e9e9e"
			                }
			                ]
			              },
			              {
			                "featureType": "road",
			                "elementType": "geometry",
			                "stylers": [
			                {
			                  "color": "#ffffff"
			                }
			                ]
			              },
			              {
			                "featureType": "road.arterial",
			                "elementType": "labels.text.fill",
			                "stylers": [
			                {
			                  "color": "#757575"
			                }
			                ]
			              },
			              {
			                "featureType": "road.highway",
			                "elementType": "geometry",
			                "stylers": [
			                {
			                  "color": "#dadada"
			                }
			                ]
			              },
			              {
			                "featureType": "road.highway",
			                "elementType": "labels.text.fill",
			                "stylers": [
			                {
			                  "color": "#616161"
			                }
			                ]
			              },
			              {
			                "featureType": "road.local",
			                "elementType": "labels.text.fill",
			                "stylers": [
			                {
			                  "color": "#9e9e9e"
			                }
			                ]
			              },
			              {
			                "featureType": "transit.line",
			                "elementType": "geometry",
			                "stylers": [
			                {
			                  "color": "#e5e5e5"
			                }
			                ]
			              },
			              {
			                "featureType": "transit.station",
			                "elementType": "geometry",
			                "stylers": [
			                {
			                  "color": "#eeeeee"
			                }
			                ]
			              },
			              {
			                "featureType": "water",
			                "elementType": "geometry",
			                "stylers": [
			                {
			                  "color": "#ededed"
			                }
			                ]
			              },
			              {
			                "featureType": "water",
			                "elementType": "labels.text.fill",
			                "stylers": [
			                {
			                  "color": "#ededed"
			                }
			                ]
			              }
			            ],
			      	});
		      	var marker = new google.maps.Marker({
		      	  position: uluru,
		      	  map: map,
		      	});

		      	}
	      	</script>
	      	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVLR2DOSxt-qPuvv8_PGZ2mO-n-9NWcEo&callback=initMap"></script>
	      	{/literal}
	    {/block}

	    {block name='hook_before_body_closing_tag'}
	      {hook h='displayBeforeBodyClosingTag'}
	    {/block}

	    <div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up">
	        <div class="content-boxpage col">
	          <div class="box-header d-flex justify-content-between align-items-center">
	              <div class="title-box">{l s="Menu" d='Shop.Theme.Layout'}</div>
	              <div class="close-box">{l s="Close" d='Shop.Theme.Layout'}{*<i class="zmdi zmdi-close"></i>*}</div>
	          </div>
	          <div id="_mobile_top_menu" class="js-top-menu box-content"></div>
	        </div>
	    </div>

	    <div id="mobile-blockcart" class="mobile-boxpage d-flex hidden-md-up">
	        <div class="content-boxpage col">
	          <div class="box-header d-flex justify-content-between align-items-center">
	              <div class="title-box">{l s="Cart" d='Shop.Theme.Layout'}</div>
	              <div class="close-box">{l s="Close" d='Shop.Theme.Layout'}</div>
	          </div>
	          <div id="_mobile_cart" class="box-content"></div>
	        </div>
	    </div>

	    <div id="mobile-pageaccount" class="mobile-boxpage d-flex hidden-md-up" data-titlebox-parent="{l s='Account'}">
	        <div class="content-boxpage col">
	          <div class="box-header d-flex justify-content-between align-items-center">
	              <div class="back-box">{l s="Back" d='Shop.Theme.Layout'}</div>
	              <div class="title-box">{l s='Account' d='Shop.Theme.Layout'}</div>
	              <div class="close-box">{l s="Close" d='Shop.Theme.Layout'}</div>
	          </div>
	          <div class="box-content d-flex justify-content-center align-items-center text-center">
	            <div>
	                <div id="_mobile_account_list"></div>
	                <div class="links-currency" data-target="#box-currency" data-titlebox="{l s='Currency'}"><span>{l s='Currency' d='Shop.Theme.Layout'}</span><i class="zmdi zmdi-arrow-right"></i></div>
	                <div class="links-language" data-target="#box-language" data-titlebox="{l s='Language'}"><span>{l s='Language' d='Shop.Theme.Layout'}</span><i class="zmdi zmdi-arrow-right"></i></div>
	            </div>
	          </div>
	          <div id="box-currency" class="box-content d-flex">
	            <div class="w-100">
	            {foreach from=$nov_currency.currencies item=currency}
	              <div class="item-currency{if $currency.current} current{/if}">
	                <a title="{$currency.name}" rel="nofollow" href="{$currency.url}">{$currency.name}: {$currency.iso_code}</a>
	              </div>
	            {/foreach}
	            </div>
	          </div>

	          <div id="box-language" class="box-content d-flex">
	            <div class="w-100">
	            {foreach from=$nov_languages.languages item=language}
	              <div class="item-language{if $language.id_lang == $nov_languages.current_language.id_lang} current{/if}">
	                <a href="{url entity='language' id=$language.id_lang}" class="d-flex align-items-center"><img class="img-fluid mr-2" src="{$img_lang nofilter}{$language.id_lang}.jpg" alt="{$language.name}" width="16" height="11" /><span>{$language.name_simple}</span></a>
	              </div>
	            {/foreach}
	            </div>
	          </div>

	        </div>
	    </div>

	    {block name="stickymenu_bottom_mobile"}
	      <div id="stickymenu_bottom_mobile">
	        <div class="row align-items-center justify-content-center hidden-md-up text-center no-gutters">
	          <div class="stickymenu-item col">
	            <a href="{$urls.base_url}"><i class="icon-house"></i><span>{l s='Home' d='Shop.Theme.Layout'}</span></a>
	          </div>
	          {* <div class="stickymenu-item"><a href="#header"><i class="zmdi zmdi-search"></i><span>{l s='Search' d='Shop.Theme.Layout'}</span></a></div> *}
	          <div class="stickymenu-item col">
	            <a href="{$link->getModuleLink('novblockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}"><i class="zmdi zmdi-favorite-outline"></i><span>{l s='Wishlist' d='Shop.Theme.Layout'}</span></a>
	          </div>
	          <div class="stickymenu-item col">
	            <div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"></div>
	          </div>
	          <div class="stickymenu-item col">
	            <a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i class="icon-settings"></i><span>{l s='Setting' d='Shop.Theme.Layout'}</span></a>
	          </div>
	          <div class="stickymenu-item col"><div id="_mobile_back_top"></div></div>
	        </div>
	      </div> 
	    {/block}
	</body>
</html>