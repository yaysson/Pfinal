<?php

include "../clase/conexion.php";
include "../clase/pais.php";

$objconexion = new conexion();
$objpais = new pais();

$objconexion = $objconexion->conectar();
 echo $objpais->editar($objconexion,$_POST['id_pais'], $_POST['nombre'], $_POST['poblacion'],
$_POST['moneda'], $_POST['capital']);

echo "<a href='../consultar.php'>ver registro</a>";

