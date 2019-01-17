<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE TestDB";
if ($conn->query($sql) === TRUE) {
    echo "</br?> Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>