<?php
$servername = "localhost";
$username = "root"; // username
$password = ""; // password
$database="ecomproject";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error)  //if (!$conn) {}
{
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successflully";
/*$conn->close();
// OR mysqli_close($conn);*/
?>