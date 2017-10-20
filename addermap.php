<?php

session_start();
?>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
       body {
     background: url(flag.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;

      }
.bar {
  width: 100%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  padding:20px;
}
.bar1 {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  padding:5px;
}
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 20
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
             document.getElementById("lat").value = position.coords.latitude;
              document.getElementById("lon").value = position.coords.longitude;
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: Please turn on GPS' :
                              'Error: Your browser doesn\'t support geolocation.');
        window.location = "gpson.php";
       
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKejRY1KRPa6OBp0wMyAO0Jzx2uZlB1ms&callback=initMap">
    </script>
<center>
<div id="demo" class="bar">Does map show your location (approx.)<br><br><span class="bar1" onclick="yeser();">Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="addaddress.php"><span class="bar1">No</span></a></div>
</center>
<div style="display:none;">
<form action="geolocationupdater.php" method="get" id="myform">
<input type="text" name="latitude" id="lat">
<input type="text" name="longitude" id="lon">
</form>
</div>
  </body>
<script>
function yeser(){
  document.getElementById("myform").submit();
}
</script>
</html>