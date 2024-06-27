<?php
if (isset($_POST['occasion']) && !empty($_POST['occasion'])) {
    // Connect to your database
    $dbHost = "your_host";
    $dbUser = "your_username";
    $dbPass = "your_password";
    $dbName = "your_database";

    $db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$db) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $occasion = $_POST['occasion'];

    // Retrieve the event category from the recommendations table based on the selected occasion
    $eventQuery = "SELECT event FROM recommendations WHERE name = '$occasion'";
    $eventResult = mysqli_query($db, $eventQuery);
    $eventRow = mysqli_fetch_assoc($eventResult);
    $event = $eventRow['event'];

    // Filter the items based on the event category
    $query = "SELECT * FROM users WHERE category IN ('shirts', 'skirts', 'trousers', 'suits', 'jackets') AND description = '$event'";

    // Additional filters based on the event category
    if ($event === 'Formal') {
        $query .= " AND length = 'long'";
    } elseif ($event === 'Casual') {
        $query .= " AND (color = 'black' OR color = 'black & white')";
    }

    $result = mysqli_query($db, $query);

    while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <img src="images/<?php echo $data['image']; ?>" alt="<?php echo $data['category']; ?>">
        <?php
    }

    // Close the database connection
    mysqli_close($db);
}
?>