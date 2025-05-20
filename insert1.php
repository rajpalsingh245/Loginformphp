<?php
require("databaseconnection.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = htmlspecialchars($_POST["fname"]);
    $lastname = htmlspecialchars($_POST["lname"]);
    $gender = htmlspecialchars($_POST["gender"] ?? '');
    $email = htmlspecialchars($_POST["email"]);
    $city = htmlspecialchars($_POST["City"] ?? '');

    

    $stmt = $conn->prepare("INSERT INTO user1 (firstname, lastname, gender, email, city) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $gender, $email, $city);

    if ($stmt->execute()) {
        echo "<script>alert('New user added!');</script>";
        header("Location: display.php");
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
        header("Location: display.php");
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid Request'); </script>";
    header("Location: display.php");
}
?>
