<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "school_db";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully";
}
?>
