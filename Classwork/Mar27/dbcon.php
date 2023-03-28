<?php
$servername = "localhost";
$username = "act2076";
$password = "Iceberg9+ruade";
$db = "act2076";

// Create connection
$conn = new mysqli ($servername, $username, $password, $db);

// Check connection

if ($conn->connect_error) {
    die ("Connection failed ");
} else {
    echo "Connection successfully";
}
?>