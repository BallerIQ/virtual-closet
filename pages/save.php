<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a database connection established

    $shirts = $_POST['shirts'];
    $skirts = $_POST['skirts'];
    $trousers = $_POST['trousers'];
    $suits = $_POST['suits'];

    // Process the selected image URLs as needed
    $deletedCount = 0;

    // Function to delete an image from the database
    function deleteImage($url)
    {
        // Implement your logic to delete the image from the database table
        // Example query: DELETE FROM clothes WHERE image = '$url'
        // Execute the query using your preferred method (e.g., mysqli_query)

        // Return true if the deletion is successful, false otherwise
        return true;
    }

    foreach ($shirts as $shirtUrl) {
        if (deleteImage($shirtUrl)) {
            $deletedCount++;
        }
    }

    foreach ($skirts as $skirtUrl) {
        if (deleteImage($skirtUrl)) {
            $deletedCount++;
        }
    }

    foreach ($trousers as $trouserUrl) {
        if (deleteImage($trouserUrl)) {
            $deletedCount++;
        }
    }

    foreach ($suits as $suitUrl) {
        if (deleteImage($suitUrl)) {
            $deletedCount++;
        }
    }

    // Return a response indicating the number of images deleted
    echo "Deleted " . $deletedCount . " images successfully";
}
?>