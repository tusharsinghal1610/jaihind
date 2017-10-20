<?php

session_start();
?>
<html>
<head>
<script>
<?php
if($_SESSION["lat"]==""){
echo 'document.getElementById("hider").style.display="none";';
}
else{
echo 'document.getElementById("alter").style.display="none";';
}
?>
</script>
<style>
body {
     background: url(flag.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
   #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;

      }
div.bar {
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  padding:20px;
}
.outer {
    display: table;
    position: absolute;
    height: 100%;
    width: 100%;
}

.middle {
    display: table-cell;
    vertical-align: middle;
}

.inner {
    margin-left: auto;
    margin-right: auto; 
    width: /*whatever width you want*/;
}
</style>
</head>

<body>
<div id="alter">
<center>

<div class="outer">
  <div class="middle">
    <div class="inner">
     <div class="bar">
       This person has not submitted GEOLOCATION, please try ADDRESS by going back
      </div>
    </div>
  </div>
</div>
</center>
</div>




<div id="hider">
<div id="map"></div>
</div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(<?php echo $_SESSION["lat"].",".$_SESSION["lon"]?>);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 17};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  google.maps.event.addListener(marker,'click',function() {
    var pos = map.getZoom();
    map.setZoom(9);
    map.setCenter(marker.getPosition());
    window.setTimeout(function() {map.setZoom(pos);},3000);
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKejRY1KRPa6OBp0wMyAO0Jzx2uZlB1ms&callback=myMap"></script>

</body>
</html>