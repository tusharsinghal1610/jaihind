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
.bar {
  width: 190px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  padding:5px;
}
.outer {
    display: table;
    position: absolute;
    height: 40%;
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

.input1 {
    width: 80%;
    padding: 12px 20px;
    margin: 2px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #f2f2f2;
}
</style>
</head>
<body >
<br><br>
<center>

<center>
<div class="outer">
  <div class="middle">
    <div class="inner">
	<h3>
        <h2>Add Your Address Manually</h2>
	<form action="addresssubmit.php" method="get" id="myform">
	<input class="input1" type="text" name="house" placeholder="House No." autocomplete="off">
 	<input class="input1" type="text" name="street" placeholder="Street No.(Gali No.)" autocomplete="off">
 	<input class="input1" type="text" name="block" placeholder="Block No." autocomplete="off">
 	<input class="input1" type="text" name="land" placeholder="LandMark" autocomplete="off">
 	<input class="input1" type="text" name="city" placeholder="City" autocomplete="off">
 	<input class="input1" type="text" name="state" placeholder="State" autocomplete="off">
 	<input class="input1" type="text" name="pin" placeholder="Pin Code" autocomplete="off">
        <input class="input1" type="text" name="phone" placeholder="Phone" autocomplete="off">
   
    </form>
<br>

<div class="bar" onclick="submitter();">
submit
</div>

</h3>
    </div>
  </div>
</div>
</body>
<script>
function submitter(){
document.getElementById("myform").submit();
}
</script>

</html>