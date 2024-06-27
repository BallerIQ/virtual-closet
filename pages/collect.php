<?php

// Establish a database connection
$hostname = 'localhost';
$username = 'baller';
$password = '1234';
$database = 'clothes';

$db  = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


