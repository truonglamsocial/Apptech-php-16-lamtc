<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "TestDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to drop table
$sql = "DROP TABLE IF EXISTS TestDB.MyGuests";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests droped successfully";
} else {
    echo "Error dropping table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>