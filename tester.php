<?php

session_start();



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
$sql = "SELECT * FROM indians WHERE ID = 'tanisha'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - lat: " . $row["latitude"]. " " . $row["Address"]. "<br>hey i am the number    ";
echo strlen($row["Address"]);
    }
if($row["latitude"]=="")
echo "i am working:";
echo strlen("Hello world!");
} else {
    echo "0 results";
}

$conn->close();
?>