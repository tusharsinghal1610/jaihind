<?php

session_start();

$ID=$_GET["ID"];


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
$sql = "SELECT ID FROM indians WHERE ID = '$ID'";
$result = $conn->query($sql);
if($result->num_rows==1)
{
$_SESSION["ID"]=$ID;
$_SESSION["check"] = 0;
header("Location: chooseupdation.php");
}
else
{
$_SESSION["check"] = 5;
header("Location: updatelocation.php");
}

$conn->close();
?>