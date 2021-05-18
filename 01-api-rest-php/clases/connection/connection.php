<?php

class connection {
    private $server;
    private $user;
    private $password;
    private $database;
    private $port;

    private function dataConnection(){
        $direccion = dirname(__FILE__);
        $jsondata = file_get_contents($direccion . "/" . "config");
        return json_decode($jsondata, true); // true para convertir en array asociativo
    }
}


?>