<?php

session_start();

$lat=$_GET["latitude"];
$lon=$_GET["longitude"];
$ID=$_SESSION["ID"];


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
$ID=$_SESSION["ID"];
$sql = "UPDATE indians SET latitude='$lat',longitude='$lon' WHERE ID='$ID'";

if ($conn->query($sql) === TRUE) {
header("Location: alteraddress.php");

} else {
	
   header("Location: error.php");
   exit();
}

$conn->close();
?>