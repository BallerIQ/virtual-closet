<?php
session_start();

// Set initial error message to empty
$error_message = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form inputs
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Perform validation checks

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "Please fill in all fields.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } elseif (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password)) {
        $error_message = "Password requirements: minimum 8 characters, at least one capital letter, and one special character.";
    }

    if (empty($error_message)) {
        // All validation checks passed, proceed with registration

        // Generate a unique user ID
        $userid = generateUserID();

        // Hash the password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Database connection details
        $servername = "your_servername";
        $dbusername = "your_username";
        $dbpassword = "your_password";
        $dbname = "your_dbname";

        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO users (userid, username, email, password_hash) VALUES (:userid, :username, :email, :password_hash)");

        // Bind the parameters
        $stmt->bindParam(':userid', $userid);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password_hash', $password_hash);

        // Execute the SQL statement
        $stmt->execute();

        // Store user ID in the session for future reference
        $_SESSION['userid'] = $userid;

        // Redirect the user to the login page
        header("Location: login.php");
        exit;
    }
}

// Function to generate a unique user ID
function generateUserID() {
    $prefix = 'USR';
    $random_part = substr(md5(uniqid(mt_rand(), true)), 0, 6); // Generate a random 6-character string
    $userid = $prefix . $random_part;
    return $userid;
}
?>