<?php
// require("conexion.php");
require_once('../restapi/config.php');

// Create connection
$conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
// mysqli_close($conn);

?>