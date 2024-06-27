<?php
$db = new mysqli("localhost", "baller", "1234", "pfekaonline");
if ($db->connect_error){
    die("Connection Error: " . $db->connect_error);
}
?>




