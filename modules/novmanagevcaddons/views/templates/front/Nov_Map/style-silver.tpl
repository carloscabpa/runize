{*
/******************
 * Vinova Themes Framework for Prestashop 1.7.x
 * @package    novmanagevcaddons
 * @version    1.0.0
 * @author     http://vinovathemes.com/
 * @copyright  Copyright (C) May 2019 vinovathemes.com <@emai:vinovathemes@gmail.com>
 * <vinovathemes@gmail.com>.All rights reserved.
 * @license    GNU General Public License version 1
 * *****************/
*}

<div class="nov-map style-1{if isset($el_class) && !empty($el_class)} {$el_class}{/if}">
	<div class="block block-map clearfix">
		{if isset($title) && !empty($title)}
		<h2 class="title_block">
			<div>
				<div class="title">{$title}</div>
				{if isset($sub_title) && !empty($sub_title)}
					<span class="sub_title">{$sub_title}</span>
				{/if}
				<div class="desc_title">{if !empty($desc_title)}{$desc_title}{/if}</div>
			</div>
		</h2>
		{/if}
		<div class="block_content">
			<div id="{$id_map}" style="height: {$height};" class="map-content"></div>
		</div>
	</div>
</div>

<script type="text/javascript">
var latitude = {$latitude};
var longitude = {$longitude};
var zoom = {$zoom};
var id_map = '{$id_map}';
function initMap() {
	{literal}
	var uluru = {lat: latitude, lng: longitude};
	var map = new google.maps.Map(document.getElementById(id_map), {
	  zoom: zoom,
	  center: uluru,
	  zoomControlOptions: {
          position: google.maps.ControlPosition.LEFT_BOTTOM
      },
	  styles: [
	  	{elementType: 'geometry', stylers: [{color: '#f5f5f5'}]},
	  	{elementType: 'labels.text.fill', stylers: [{color: '#616161'}]},
		{
			featureType: 'poi.park',
			elementType: 'geometry',
			stylers: [{color: '#e5e5e5'}]
		},
		{
		  featureType: 'road',
		  elementType: 'geometry',
		  stylers: [{color: '#ffffff'}]
		},
		{
		  featureType: 'water',
		  elementType: 'geometry',
		  stylers: [{color: '#c9c9c9'}]
		},
		{
		  elementType: 'labels.icon',
		  stylers: [{'visibility': 'off'}]
		}
	  ],
	});

	var marker = new google.maps.Marker({
	  position: uluru,
	  map: map
	});
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqonQ7FCOJYachvZEG3Iz5aSsL4TJB34Y&callback=initMap"></script>
{/literal}