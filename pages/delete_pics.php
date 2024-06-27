<?php
// Database connection details
$servername = "localhost";
$username = "baller";
$password = "1234";
$databaseName = "pfekaonline";

// Create connection
$db = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($db->connect_error) {
    die("Database connection failed: " . $db->connect_error);
}

// Check if the selected images are set in the POST request
if (isset($_POST['selectedImages'])) {
    $selectedImages = $_POST['selectedImages'];

    // Display the selected image names
    echo "Selected images:<br>";
    echo "<ul>";
    foreach ($selectedImages as $image) {
        echo "<li><img src='" . $image . "' width='100'></li>";
    }
    echo "</ul>";

    // Prepare the SQL query to delete the selected images from the database
    $sql = "DELETE FROM clothes WHERE image IN ('" . implode("', '", $selectedImages) . "')";

    // Start the transaction
    $db->begin_transaction();

    if ($db->query($sql) === TRUE) {
        // Commit the transaction
        $db->commit();
        echo "Selected images deleted successfully from the database.";
    } else {
        // Rollback the transaction
        $db->rollback();
        echo "Error deleting images from the database: " . $db->error;
    }
} else {
    echo "No images selected.";
}

// Close the database connection
$db->close();
?>