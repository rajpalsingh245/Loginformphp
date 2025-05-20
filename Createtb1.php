<?php
require("databaseconnection.php");
// $sql = "DROP TABLE user1";
$sql = "CREATE TABLE user1 (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    gender VARCHAR(10),
    email VARCHAR(60),
    city VARCHAR(30)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table User created successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
