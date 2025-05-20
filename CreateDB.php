<?php
require("databaseconnection.php");

$sql = "CREATE DATABASE user";
if (mysqli_query($conn, $sql)) {
    echo "DATABASE user created successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);



?>