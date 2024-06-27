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

// Retrieve the userid from the session
if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
} else {
    // No userid found in the session
    echo "Failed to retrieve userid from session.";
    exit;
}

// Fetch the user details from the profile table
$query = "SELECT picture, gender, age, resident FROM profile WHERE userid = ?";
$stmt = $db->prepare($query);
if (!$stmt) {
    echo "Error in preparing statement: " . $db->error;
    exit;
}

$stmt->bind_param("i", $userid);
$stmt->execute();
$stmt->bind_result($picture, $gender, $age, $resident);

if ($stmt->fetch()) {
    // User details successfully retrieved
    // You can now use the $picture, $gender, $age, and $resident variables
    echo "Picture: " . $picture . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Resident: " . $resident . "<br>";
} else {
    echo "No user details found.";
}

$stmt->close();
$db->close();
?>