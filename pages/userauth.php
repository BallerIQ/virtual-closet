<?php
session_start(); // Start the session

// Database credentials
$servername = "localhost";
$username = "baller";
$password = "1234";
$dbname = "pfekaonline";

// Create a new connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get the last user ID from the database
$sql = "SELECT MAX(CAST(SUBSTRING(userid, 5) AS UNSIGNED)) AS max_userid FROM users";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$maxId = $row["max_userid"];

// Generate a new user ID
$userId = "user" . ($maxId + 1);

// Hash the password
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
} else {
    $hashedPassword = '';
}

// Ensure the $email variable is defined
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}

// Insert the user data into the database
$sql = "INSERT INTO users (userid, username, email, password_hash) VALUES ('$userId', '$username', '$email', '$hashedPassword')";

if ($db->query($sql) === TRUE) {
    $successMessage = "Registration successful! You will be redirected to the login page.";
    $_SESSION['success_message'] = $successMessage;
    header("Location: login.php");
    exit;
} else {
    $errorMessage = "Error: " . $sql . "<br>" . $db->error;
    $_SESSION['error_message'] = $errorMessage;
    header("Location: signup.php");
    exit;
}

$db->close();
?>