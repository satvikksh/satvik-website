<?php
// login.php

// Retrieve the submitted username and password
$username = $_POST="root";
$password = $_POST="";

// Connect to the database
$servername = "localhost";
$dbusername = "your_db_username";
$dbpassword = "your_db_password";
$dbname = "mydb";

$conn = new mysqli($servername, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate the username and password
$sql = "SELECT * FROM satvikk WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Authentication successful
    echo "Login successful!";
} else {
    // Authentication failed
    echo "Invalid username or password.";
}

// Close the database connection
$conn->close();
?>
