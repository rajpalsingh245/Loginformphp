<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>ADD Details</h1>
<form action="insert1.php" method="POST">
<label>First Name:</label>
<input type="text" name="fname" required><br>
<label>Last Name:</label>
<input type="text" name="lname" required><br>
<label>Email:</label>
<input type="email" name="email" required><br>
<label>Gender:</label>
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other<br>
<label>City:</label>
<select name="City" required>
    <option value="">--Select City--</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Mysuru">Mysuru</option>
    <option value="Chennai">Chennai</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Delhi">Delhi</option>
    <option value="Kolkata">Kolkata</option>
</select><br><br>
<input type="submit" value="Submit">
<a href="main.php"><button type="button">Cancel</button></a>
    </form>
</body>
</html>
