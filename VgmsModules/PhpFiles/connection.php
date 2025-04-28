<?php
// Database configuration
$host = 'localhost';     // Host name
$username = 'root';      // Database username
$password = '';          // Database password
$database = 'vg_mg_sys'; // Database name

// Create database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
