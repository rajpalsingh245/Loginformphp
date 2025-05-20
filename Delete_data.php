<?php
require("databaseconnection.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM user1 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully')</script>";
        header("Location:display.php");
    } else {
        echo "<script>alert('Error: " . $stmt->error . "') </script>";
        header("Location:display.php");
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('No student ID provided');</script>";
    header("Location:diaplay.php");
}

?>
