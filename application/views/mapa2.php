<!DOCTYPE html>
<html>
  <head>
    <title>Data Layer: Event Handling</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #info-box {
        background-color: white;
        border: 1px solid black;
        bottom: 30px;
        height: 20px;
        padding: 10px;
        position: absolute;
        left: 30px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <div id="info-box">?</div>
    <script>

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: -28, lng: 137}
        });

        // Load GeoJSON.
        map.data.loadGeoJson('<?php echo base_url();?>js/mapa.geojson');

        // Add some style.
        map.data.setStyle(function(feature) {
          return /** @type {google.maps.Data.StyleOptions} */({
            fillColor: feature.getProperty('color'),
            strokeWeight: 1
          });
        });

        // Set mouseover event for each feature.
        /*map.data.addListener('mouseover', function(event) {
          document.getElementById('info-box').textContent =
              event.feature.getProperty('letter');
        });*/
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB90BUuYggm4ZpunLxo_slY52Zc5n-ySw&callback=initMap">
    </script>
  </body>
</html>