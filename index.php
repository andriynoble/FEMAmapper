<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tech Support in #NYC for #Sandy Downed Businesses</title>
	<link rel="stylesheet" href="style/framework.css" />
	<link rel="stylesheet" href="style/style.css" />
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.css" />
 <!--[if lte IE 8]>
     <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.ie.css" />
 <![endif]-->
</head>
<body>
	<div class="container top">
		<h1>Support the <span class="hashtag">#NYC</span> Businesses downed by <span class="hashtag">#Sandy</span></h1>
	</div>
	<div class="container posts">
		<div id="map"></div>
	</div>
	<script src="http://cdn.leafletjs.com/leaflet-0.4/leaflet.js"></script>
	<script>

		var map = L.map('map').setView([40.714353,-74.005973], 13);

		L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png', {
			maxZoom: 18,
			attribution: ''
		}).addTo(map);

		<?php

		echo 'L.marker([40.714413,-74.010129]).addTo(map)
			.bindPopup("<b>ABC Company</b><br />I need Help!").closePopup();';

		?>

		var popup = L.popup();

		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("You clicked the map at " + e.latlng.toString())
				.openOn(map);
		}

		map.on('click', onMapClick);

	</script>

</body>
</html>
