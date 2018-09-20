<?php

class pais{

    public function registrar($conexion,$nombre, $poblacion, $moneda, $capital){
       
         $query = "INSERT INTO pais (nombre,poblacion,moneda,capital) 
        VALUES ('$nombre', '$poblacion', '$moneda', '$capital')";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "pais registrado";

        }else{
            $respuesta = "error al registrar pais";
        }
        return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM pais";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
    public function consultarId($conexion, $id){
        $query = "SELECT * FROM pais where id_pais = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
    public function editar($conexion,$id,$nombre, $poblacion,$moneda, $capital){
        $query = "UPDATE pais set nombre = '$nombre', poblacion = '$poblacion',
        moneda = '$moneda', capital = '$capital' 
        where id_pais = $id";

        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "pais actualizado";
        }else{
            $respuesta = "problemas al actualizar pais";
        }
        return $respuesta;
    }
    public function eliminar($conexion, $id){
        $query = "DELETE FROM pais WHERE id_pais = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "pais eliminado";
        }else{
            $respuesta = "problemas al eliminar";
        }
        return $respuesta;
    }
}