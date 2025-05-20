<?php
require("databaseconnection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = htmlspecialchars($_POST['id']);
    $firstname = htmlspecialchars($_POST["fname"]);
    $lastname =htmlspecialchars( $_POST["lname"]);
    $gender = htmlspecialchars($_POST["gender"] ?? '');
    $email = htmlspecialchars($_POST["email"]);
    $city = htmlspecialchars($_POST["City"] ?? '');

    $stmt = $conn->prepare("UPDATE user1 SET firstname=?, lastname=?, gender=?, email=?, city=? WHERE id=?");
    $stmt->bind_param("sssssi", $firstname, $lastname, $gender, $email, $city, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Record updated successfully');</script>";
        header("Location:display.php");
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
        header("Location:display.php");
    }

    $stmt->close();
    $conn->close();
} else {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM user1 WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <h1>Edit User Details</h1>
 <form action="Edit_data.php" method="POST">
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<label>First Name:</label>
<input type="text" name="fname" value="<?= $row['firstname'] ?>" required><br>
<label>Last Name:</label>
<input type="text" name="lname" value="<?= $row['lastname'] ?>" required><br>
<label>Email:</label>
<input type="email" name="email" value="<?= $row['email'] ?>" required><br>
<label>Gender:</label>
<input type="radio" name="gender" value="Male" <?= ($row['gender'] == 'Male') ? 'checked' : '' ?>> Male
<input type="radio" name="gender" value="Female" <?= ($row['gender'] == 'Female') ? 'checked' : '' ?>> Female
<input type="radio" name="gender" value="Other" <?= ($row['gender'] == 'Other') ? 'checked' : '' ?>> Other<br>
<label>City:</label>
<select name="City" required>
    <option value="Bangalore" <?= ($row['city'] == 'Bangalore') ? 'selected' : '' ?>>Bangalore</option>
    <option value="Mysuru" <?= ($row['city'] == 'Mysuru') ? 'selected' : '' ?>>Mysuru</option>
    <option value="Chennai" <?= ($row['city'] == 'Chennai') ? 'selected' : '' ?>>Chennai</option>
    <option value="Mumbai" <?= ($row['city'] == 'Mumbai') ? 'selected' : '' ?>>Mumbai</option>
    <option value="Delhi" <?= ($row['city'] == 'Delhi') ? 'selected' : '' ?>>Delhi</option>
    <option value="Kolkata" <?= ($row['city'] == 'Kolkata') ? 'selected' : '' ?>>Kolkata</option>
     </select><br><br>

     <input type="submit" value="Update">
     <a href="display.php"><button type="button">Cancel</button></a>
 </form>
</body>
</html>
