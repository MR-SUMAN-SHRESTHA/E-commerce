<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="ecommerce";

// Create connection
$connection = new mysqli($servername, $username, $password, $db);

// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
?>