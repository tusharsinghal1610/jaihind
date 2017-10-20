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
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  padding:20px;
}
div.bar1 {
 
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
	<div class="bar">
         <h2>Oops!! Something went wrong , try again with your GPS on</h2>
<a href="index.php">
<div class="bar1">
Try Again
</div>
</a>

      </div>
    </div>
  </div>
</div>
</body>
</html>