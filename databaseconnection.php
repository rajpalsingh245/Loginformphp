<?php
$servername = "localhost";
$username = "root";
$password = "newpassword";  
$dbname = "user";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_set_charset($conn, "utf8");
?>
