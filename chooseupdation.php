<?php

session_start();
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DIGITAL INDIA</title>
<style>
body {
     background: url(flag.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
div.bar {
  width: 250px;
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
a{
text-decoration:none;
color:black;
}
</style>
</head>
<body >
<center>

<center>
<div class="outer">
  <div class="middle">
    <div class="inner">
	<h3>
     <a href="addermap.php"> <div class="bar">
	  
Update Geolocation

</div>
</a>
<br>
<a href="addaddress.php">
<div class="bar">
Update Address
</div>
</a>

</h3>
    </div>
  </div>
</div>
</body>
</html>