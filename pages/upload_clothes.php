<?php
// Establish a database connection
$hostname = 'localhost';
$username = 'baller';
$password = '1234';
$database = 'pfekaonline';

$db  = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data

    // Retrieve form data
    $image = $_FILES["clothesImage"]["name"];
    $category = $_POST["category"];
    $color = $_POST["color"];
    $description = $_POST["description"];
    $season = $_POST["season"];
    $length = $_POST["length"];

    // File handling
    $targetDirectory = "images/"; // Specify the target directory
    $targetFile = $targetDirectory . basename($image); // Path to the target file

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["clothesImage"]["tmp_name"], $targetFile)) {
        // Insert the data into the database
        $sql = "INSERT INTO clothes (image, category, color, description, season, length) 
                VALUES ('$image', '$category', '$color', '$description', '$season', '$length')";
        
        if ($db->query($sql) === true) {
            // Successful insertion
            echo "Information saved successfully!";
        } else {
            // Error occurred during insertion
            echo "Error: " . $db->error;
        }
    } else {
        // Error occurred during file upload
        echo "Error uploading the file.";
    }

    // Close the database connection
    $db->close();
    exit(); // Stop further execution of the script
}
?>