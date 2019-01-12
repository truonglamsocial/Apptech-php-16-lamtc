<?php
include 'db_info.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Truong', 'Lam', 'hi@zingmedia.vn')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>