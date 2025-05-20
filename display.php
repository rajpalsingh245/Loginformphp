<?php
require_once("session.php"); 
require ("databaseconnection.php");

$sql = "SELECT * FROM user1"; 
$result = mysqli_query($conn, $sql); 
?>
<!DOCTYPE html>
<html>
<head>
<title>User Table</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1 style="text-align: center; color:black; font-weight:600;">User Table</h1>
<header>
<div style="text-align: center; margin-bottom: 20px;">
    <a href="Add.php" class="add-button">Add User</a>
    <a href="logout.php" class="add-button">Logout</a>
</div>
</header>
<?php
if (mysqli_num_rows($result) > 0) {
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Gender</th><th>Email</th><th>City</th><th>Actions</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
$fullName = htmlspecialchars($row["firstname"] . " " . $row["lastname"]);
echo "<tr>";
echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
echo "<td>" . $fullName ."</td>";
echo "<td>" . htmlspecialchars($row["gender"]) . "</td>";
echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
echo "<td>" . htmlspecialchars($row["city"]) . "</td>";
echo "<td>
<a href='Edit_data.php?id=" . urlencode($row["id"]) . "' class='button button-edit'>Edit</a>
<a href='Delete_data.php?id=" . urlencode($row["id"]) . "' class='button button-delete' onclick='return confirm(\"Are you sure you want to delete the record for ID ". $row["id"]."(".$fullName.")from".$row["city"]."?\");'>Delete</a>
    </td>";
echo"</tr>";
}
echo "</table>";
    } else {
        echo "<p style='text-align: center;'>No records found.</p>";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
