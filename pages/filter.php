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

// Get the values from the AJAX request
$select1Value = $_POST['occasion'];
$select2Value = $_POST['location'];

// Prepare the SQL query with the filter conditions
$sql = "SELECT * FROM clothes WHERE ";

if ($select1Value == 'wedding' && ($select2Value == 'rural' || $select2Value == 'urban')) {
    $sql .= "description = 'formal' AND (trouser = 'long' OR skirt = 'long')";
} elseif ($select1Value == 'funeral' && $select2Value == 'rural') {
    $sql .= "description = 'casual' AND (color = 'black' OR color = 'black & white') AND (trouser = 'long' OR skirt = 'long')";
} elseif ($select1Value == 'funeral' && $select2Value == 'urban') {
    $sql .= "color = 'black'";
} elseif ($select1Value == 'interview' && ($select2Value == 'rural' || $select2Value == 'urban')) {
    $sql .= "description = 'formal' AND (trouser = 'long' OR skirt = 'long')";
} elseif ($select1Value == 'traditional' && ($select2Value == 'rural' || $select2Value == 'urban')) {
    $sql .= "description = 'formal' AND trouser = 'traditional'";
}

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Convert the result to a JSON format and send it back to the client
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);

// Close the database connection
$stmt->close();
$conn->close();
?>