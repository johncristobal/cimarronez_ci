<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
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
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type='text/javascript'>

    function initMap(){

        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                initMapData(this);
            }
        };
        xhttp.open("GET", "<?php echo base_url()?>/myxmlfile.xml", true);
        xhttp.send();
    }

      function initMapData(xml) {

        var myLatLng = {lat: 19.6860799, lng: -98.87163609999999};
        
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: myLatLng
        });
        var infoWindow = new google.maps.InfoWindow;
        
        var x, i, txt, xmlDoc; 
        xmlDoc = xml.responseXML;
        txt = "";
        x = xmlDoc.getElementsByTagName("marker");
        Array.prototype.forEach.call(x, function(markerElem) {
        //for (i = 0; i < x.length; i++) { 
            //txt += x[i].childNodes[0].nodeValue + "<br>";
              var name = markerElem.getAttribute('name');
              //var address = markerElem.getAttribute('address');
              //var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name;
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              /*var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);*/
              //var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point
                //label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
        //}
        });
        //document.getElementById("demo").innerHTML = txt;
    
        /*var myLatLng = {lat: 19.6860799, lng: -98.87163609999999};
        
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: myLatLng
        });*/

        /*var infowindow = new google.maps.InfoWindow(), marker, lat, lng;
        debugger;
        for( var o in markers ){
            lat = markers[ o ].lat;
            lng=markers[ o ].lng;
            name="A";
            
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(lat,lng),
                name:name,
                map: map,
            });
            google.maps.event.addListener( marker, 'click', function(e){
                infowindow.setContent( this.name );
                infowindow.open( map, this );
            }.bind( marker ) );            
        }*/
        

      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmoFLOpAbHlyRCFVm2OjC3D5UQSPy38jM&callback=initMap">
    </script>
  </body>
</html>

