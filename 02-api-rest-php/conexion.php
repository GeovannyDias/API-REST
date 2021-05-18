<?php

// function retornarConexion(){
//     $SERVER = 'localhost';
//     $USER = 'root';
//     $PASS = '';
//     $DB = 'productos';
//     $con = mysqli_connect("localhost", "root", "", "productos");
//     return $con;
// }

$hostname = "localhost";
$username = "root";
$password = "";
$database = "productos";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// mysqli_close($conn);


echo "<br>SERVER:".$_SERVER['REQUEST_METHOD'];


?>