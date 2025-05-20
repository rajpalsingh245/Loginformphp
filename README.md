<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loginformphp - README</title>
</head>
<body>
  <h1>Loginformphp</h1>

  <h2>Overview</h2>
  <p><strong>Loginformphp</strong> is a PHP-based user authentication system that facilitates user registration, login, session management, and basic CRUD (Create, Read, Update, Delete) operations. It's designed as a foundational framework for web applications requiring user authentication and data management.</p>

  <h2>Features</h2>
  <ul>
    <li>User Registration</li>
    <li>User Login/Logout</li>
    <li>Session Management</li>
    <li>CRUD Operations</li>
    <li>Database Initialization Scripts</li>
    <li>Responsive Basic Design</li>
  </ul>

  <h2>File Structure</h2>
  <ul>
    <li><code>register.php</code> – User registration page</li>
    <li><code>login.php</code> – Login functionality</li>
    <li><code>logout.php</code> – Logout and session destroy</li>
    <li><code>session.php</code> – Session validation</li>
    <li><code>Add.php</code> – Add new data</li>
    <li><code>Edit_data.php</code> – Edit existing data</li>
    <li><code>Delete_data.php</code> – Delete data</li>
    <li><code>display.php</code> – Display data</li>
    <li><code>CreateDB.php</code> – Create database</li>
    <li><code>CreateTB.php</code>, <code>Createtb1.php</code>, <code>createusertb.php</code> – Create tables</li>
    <li><code>databaseconnection.php</code> – Database connection file</li>
    <li><code>style.css</code>, <code>styles.css</code> – CSS styling</li>
  </ul>

  <h2>Getting Started</h2>

  <h3>Prerequisites</h3>
  <ul>
    <li>Apache or compatible web server</li>
    <li>PHP 7.0 or higher</li>
    <li>MySQL database server</li>
  </ul>

  <h3>Installation</h3>
  <ol>
    <li>Clone the repository:
      <pre><code>git clone https://github.com/rajpalsingh245/Loginformphp.git</code></pre>
    </li>
    <li>Import database scripts:
      <ul>
        <li>Run <code>CreateDB.php</code> to create the database</li>
        <li>Run <code>CreateTB.php</code>, <code>Createtb1.php</code>, and <code>createusertb.php</code> to create tables</li>
      </ul>
    </li>
    <li>Update <code>databaseconnection.php</code> with your MySQL credentials</li>
    <li>Place the folder in your server root (e.g., <code>htdocs</code> for XAMPP)</li>
    <li>Navigate to <code>http://localhost/Loginformphp/register.php</code> in your browser</li>
  </ol>

  <h2>Usage</h2>
  <ol>
    <li>Register a new user</li>
    <li>Login with your credentials</li>
    <li>Access dashboard and manage data</li>
    <li>Logout when finished</li>
  </ol>

  <h2>Contributing</h2>
  <p>Contributions are welcome! Fork the repository and submit a pull request with improvements or bug fixes.</p>

  <h2>License</h2>
  <p>This project is licensed under the MIT License. See the <a href="https://github.com/rajpalsingh245/Loginformphp/blob/main/LICENSE">LICENSE</a> file for more details.</p>
</body>
</html>
