<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "baller";
$password = "1234";
$dbname = "pfekaonline";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get the submitted username and password
$submitted_username = $_POST['username'];
$submitted_password = $_POST['password'];

// Prepare and execute the SQL query
$stmt = $db->prepare("SELECT userid, username, email, password_hash FROM users WHERE username = ?");
$stmt->bind_param("s", $submitted_username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stored_password_hash = $row['password_hash'];

    // Verify the password
    if (password_verify($submitted_password, $stored_password_hash)) {
        // Password is correct, set the session variables and redirect the user to the profile page
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header("Location: profile.php");
        exit;
    } else {
        // Password is incorrect, set an error message in the session
        $_SESSION['error_message'] = "Invalid username or password";
    }
} else {
    // User not found, set an error message in the session
    $_SESSION['error_message'] = "Invalid username or password";
}

// Redirect the user to the login page
header("Location: login.php");
exit;

$stmt->close();
$db->close();
?>