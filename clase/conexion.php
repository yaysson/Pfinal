<?php

class conexion{
    public function conectar(){
        $host = "localhost";
        $user = "root";
        $password = "root";
        $db = "pfinal";
        $conexion = mysqli_connect($host, $user, $password, $db);

        if($conexion == false){
            die("ERROR".mysqli_connect_error);          

        }else{
            return $conexion;
        }
    }
}