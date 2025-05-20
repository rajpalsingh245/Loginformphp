<?php
require("databaseconnection.php");
// $sql="DROP TABLE user2";
$sql = "CREATE TABLE user2 (
  id int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(50) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(150) NOT NULL)";
if (mysqli_query($conn, $sql)) {
    echo "Table User created successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
