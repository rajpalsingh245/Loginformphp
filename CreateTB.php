<?php
require("databaseconnection.php");

$sql="CREATE TABLE user(
username VARCHAR(50),
password VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table user created successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>











