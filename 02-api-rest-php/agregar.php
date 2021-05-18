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
$con = $conn;

$query = "INSERT INTO articulos(descripcion, precio) values ('$params->descripcion',$params->precio)";
// $res = 
mysqli_query($con, $query);

// if($res){
//     return true;
//   }else{
//   return false;
// }

// if($result){
//     while($row = mysqli_fetch_array($result)){
//         $name = $row["$yourfield"];
//         echo "Nombre: ".$name."br/>";
//     }
// }

class Result {}

$response = new Result();
$response->resultado = 'OK';
$response->mensaje = 'Datos Guardados Correctamente...';

header('Content-Type: application/json');
echo $response;
mysqli_close($conn);

?>