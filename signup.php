<?php
$servername = "localhost";
$username = "pma";
$password = "Satvik@31";
$dbname = "myDB";
$email = "email";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Retrieve the form inputs
$name = $_POST['name'];
$username = $_POST['pma'];
$password = $_POST['Satvik@31'];
$email = $_POST['email'];

// Perform any necessary validation or sanitation on the input

// Hash the password (using a strong hashing algorithm like bcrypt)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Save the user information to your database 
// Replace this with your own logic to store the data in your data source
// You would typically use database queries or an ORM for this step
// Example using PDO:
$db = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');
$stmt = $db->prepare('INSERT INTO users (name, username, password, email) VALUES (?, ?, ?, ?)');
$stmt->execute([$name, $username, $hashedPassword, $email]);

// Redirect the user to a success page or any other desired location
header('Location: signup_success.php');
exit();
$conn->close();
?>
