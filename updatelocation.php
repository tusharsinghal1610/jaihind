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
<center>

<center>
<div class="outer">
  <div class="middle">
    <div class="inner">
	<h3>
	<form action="update.php" method="get" id="myform">
	<input class="input1" type="text" name="ID" placeholder="Enter Your ID" autocomplete="off">
    	<?php
	if (isset($_SESSION["check"])) {
	if($_SESSION["check"] == 5)
	{
	echo '<b style="color:red;"><br>ID do not Exist</b>';
	}
	}
?>
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