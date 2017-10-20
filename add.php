<?php

session_start();

$ID=$_GET["ID"];


if(strpos("$ID"," "))
{
	$_SESSION["check"] = 2;
   header("Location: createlocation.php");
   exit();
}
$servername = "localhost";
$username = "id2398881_tusharsinghal";
$password = "mayanktushar";
$dbname = "id2398881_jaibharat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO indians (ID)
VALUES ('$ID')";

if ($conn->query($sql) === TRUE) {
   
	$_SESSION["ID"] = $ID;
        $_SESSION["check"] = 0;
} else {
	$_SESSION["check"] = 1;
   header("Location: createlocation.php");
   exit();
}
header("Location:addermap.php"); /* Redirect browser */
$conn->close();
?>