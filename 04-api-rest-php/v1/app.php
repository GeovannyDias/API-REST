<?php
// echo "<br>SERVER:".$_SERVER['REQUEST_METHOD'];
require_once('../restapi/headers.php');
require_once('../restapi/db_connect.php');


// GET ALL DATA → or GET ID DATA
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // ID=codigo used to fetch single row
    if (isset($_GET['codigo'])) {
        $id = $conn->real_escape_string($_GET['codigo']);
        // El  método anterior se encarga de limpiar las variables 
        // antes de poder registrar en la base de datos, esto se hace 
        // para evitar posibles inyecciones SQL en la base de datos.
        
        $sql = "SELECT * FROM articulos WHERE codigo=$id";
        $query = $conn->query($sql);
        $data = $query->fetch_assoc();
    } else {
        $data = array();
        $sql = "SELECT * FROM articulos";
        $query = $conn->query($sql);
        while($d = $query->fetch_assoc()){
            // Castear datos
            // $res = [
            //     'descripcion'=> $d['descripcion'],
            //     'precio'=> (float)$d['precio'],
            //     // 'precio'=> floatval($d['precio']), // igual que float
            // ];
                
            $data[] = $d;
            // $data[] = $res;
        }
    }


    /* liberar el conjunto de resultados */
    if($query) $query->free();

    /* cerrar la conexión */
    $conn->close();

    exit(json_encode($data)); // Return json data
    // mysqli_close($conn);
}


// POST DATA
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));

    $descripcion = $data->descripcion;
    $precio = $data->precio;

    $sql = "INSERT INTO articulos (descripcion, precio) VALUES ('$descripcion', $precio)";
    $query = $conn->query($sql);
    if ($query) {
        $data->codigo = $conn->insert_id; // append id to the data object (Anadir ID)
        exit(json_encode($data));
    } else {
        exit(json_encode(array('status'=>'error')));
    }
}


// UPDATE DATA
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
   if (isset($_GET['codigo'])) {
        $id = $conn->real_escape_string($_GET['codigo']);
        $data = json_decode(file_get_contents("php://input"));

        // $codigo = $data->codigo;
        $descripcion = $data->descripcion;
        $precio = $data->precio;

        $sql = "UPDATE articulos SET descripcion = '$descripcion', precio = $precio WHERE codigo = $id";
        $query = $conn->query($sql);

        if ($query) {
            exit(json_encode(array('status'=>'success')));
        } else {
            exit(json_encode(array('status'=>'error')));
        }
   }
}


// DELETE DATA
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if (isset($_GET['codigo'])) {
        $id = $conn->real_escape_string($_GET['codigo']);
        $sql = "DELETE FROM articulos WHERE codigo = $id";
        $query = $conn->query($sql);
        if ($query) {
            exit(json_encode(array('status'=>'success')));
        } else {
            exit(json_encode(array('status'=>'error')));
        }
    }
}




?>