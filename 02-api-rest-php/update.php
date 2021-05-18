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

$json = file_get_contents('php://input');

$params = json_decode($json);

require("conexion.php");
$con = retornarConexion();

$query = "UPDATE articulos SET descripcion='$params->descripcion', precio=$params->precio WHERE codigo=$params->codigo";
mysqli_query($con, $query);

class Result {}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje = 'Datos Actualizados Exitosamente...';

header('Content-Type: application/json');
echo $response;

?>