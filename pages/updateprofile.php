<?php
// Start the session
session_start();

// Establish a database connection
$hostname = 'localhost';
$username = 'baller';
$password = '1234';
$database = 'pfekaonline';

$db  = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have established a database connection

    // Retrieve the form data
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $resident = $_POST['resident'];
    $username = $_POST['username']; // Assuming you have set the appropriate enctype for the form
    $secretKey = $_POST['key'];

    // Retrieve the userid from the session
    if (isset($_SESSION['userid'])) {
        $userid = $_SESSION['userid'];
    } else {
        // No userid found in the session
        echo "Failed to retrieve userid from session.";
        exit;
    }

    // Prepare and execute the SQL query
    $query = "INSERT INTO profile (userid, gender, age, resident, username, secret_key) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    if (!$stmt) {
        echo "Error in preparing statement: " . $db->error;
        exit;
    }

    $stmt->bind_param("isssss", $userid, $gender, $age, $resident, $username, $secretKey);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Insertion successful
        echo "Profile details inserted successfully!";
    } else {
        // Insertion failed
        echo "Failed to insert profile details.";
    }

    $stmt->close();
    $db->close();
}
?>