<?php

include '../clase/conexion.php';
include '../clase/pais.php';

$objconexion = new conexion;
$objpais = new pais;

$conexion = $objconexion->conectar();
echo $objpais->eliminar($conexion, $_GET['id_pais']);
