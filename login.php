<?php
require_once("databaseconnection.php");
session_start();

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    if (empty($email)) {
        $error .= '<p class="error">Please enter email.</p>';
    }
    if (empty($password)) {
        $error .= '<p class="error">Please enter your password.</p>';
    }
    if (empty($error)) {
        $result = mysqli_query($conn, "SELECT * FROM user2 WHERE email = '$email' AND password='$password'");
        if (mysqli_num_rows($result) > 0) {
            header("Location: display.php");
            exit;
        } else {
            $error .= '<p class="error">The password is not valid.</p>';
        }

    }
} else {
    $error .= '<p class="error">No user exists with that email address.</p>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <?php echo $error; ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required />
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Login">
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </form>
    </div>
</body>

</html>