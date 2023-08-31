<?php
$hostname = "localhost"; // Replace with your actual hostname
$username = "root";      // Replace with your actual username
$password = "";          // Replace with your actual password
$dbname = "user"; // Replace with your actual database name

// Create a connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();
?>
