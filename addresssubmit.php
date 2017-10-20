<?php

session_start();

$house=$_GET["house"];
$street=$_GET["street"];
$block=$_GET["block"];
$land=$_GET["land"];
$city=$_GET["city"];
$state=$_GET["state"];
$pin=$_GET["pin"];
$phone=$_GET["phone"];
$address="House No. ".$house." Gali No. ".$street." Block- ".$block." LandMark- ".$land." city- ".$city." state- ".$state." pin- ".$pin." phone- ".$phone;


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
$sql = "UPDATE indians SET Address='$address' WHERE ID='$ID'";

if ($conn->query($sql) === TRUE) {
  header("Location: thanks.php");

} else {

   header("Location: error.php");
   exit();
}

$conn->close();
?>