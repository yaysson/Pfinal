<?php

include "../clase/conexion.php";
include "../clase/pais.php";

$objconexion = new conexion();
$objpais = new pais();

$conexion = $objconexion->conectar();
 echo $objpais->registrar($conexion, $_POST['nombre'], $_POST['poblacion'], 
$_POST['moneda'], $_POST['capital']);