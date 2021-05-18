<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');

/*
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
*/


require("conexion.php");
$con = retornarConexion();

$query = "SELECT codigo, descripcion, precio FROM articulos";
$registros = mysql_query($con, $query);

$vec = [];
while ($reg = mysql_fetch_array($registros)) {
    $vec = $reg;
}

$cad = json_encode($vec);
echo $cad;

header('Content-Type: application/json');

?>