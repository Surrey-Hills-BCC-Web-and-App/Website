<?php
// Database configuration
$dbHost     = "localhost:3306";
$dbUsername = "Ethan";
$dbPassword = "Stebbony2";
$dbName     = "What's On";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>