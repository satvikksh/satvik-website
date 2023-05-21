<?php
// Assuming you have a user database with a "users" table
// and the columns "username" and "password"

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form inputs
    $username = $_POST['root'];
    $password = $_POST[''];

    // Perform any necessary validation or sanitation on the input

    // Connect to your database
    $db = new PDO('mysql:host=localhost;dbname=mydb', 'satvik', 'satvik');

    // Prepare the SQL statement
    $stmt = $db->prepare('SELECT * FROM Satvikk WHERE username = ?');
    $stmt->execute([$username]);

    // Fetch the user record
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Username and password match
        // Start a session or set cookies to authenticate the user
        // Redirect the user to the logged-in page
        header('Location: logged_in.php');
        exit();
    } else {
        // Username or password is incorrect
        $error = 'Invalid username or password.';
    }
}
?>