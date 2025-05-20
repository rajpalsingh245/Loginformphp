<?php
require_once("databaseconnection.php");
$error = '';
$success = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $fullname = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    if ($password !== $confirm_password) {
        $error .= '<p class="error">Passwords do not match.</p>';
    }
    if (empty($error)) {
        $query = "SELECT id FROM user2 WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $error .= '<p class="error">Email is already registered.</p>';
        } else {
            $query = "INSERT INTO user2 (name, email, password) VALUES ('$fullname', '$email', '$password')";
            if (mysqli_query($conn, $query)) {
                $success = '<p class="success">Registration successful! You can <a href="login.php">login now</a>.</p>';
            } else {
                $error .= '<p class="error">Something went wrong. Please try again.</p>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <?php echo $success; ?>
        <?php echo $error; ?>
        <form action="" method="post">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required />
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required />
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Register">
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>

</html>