<?php

include "../clase/conexion.php";
include "../clase/pais.php";

$objconexion = new conexion();
$objpais = new pais();

$conexion = $objconexion->conectar();
$datospais = $objpais->consultarId($conexion, $_GET['id']);

$nombre;
$poblacion;
$moneda;
$capital;
$id;

while($pais = mysqli_fetch_array($datospais)){
    $id = $pais['id_pais'];
    $nombre = $pais['nombre'];
    $poblacion = $pais['poblacion']; 
    $moneda = $pais['moneda'];
    $capital = $pais['capital'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2><center>REGISTRO PAIS</center></h2>
    <form action="controlador/editar.php"method="POST">

        <input type="hidden" name="id_pais" value="<?php echo $id; ?>">
        <label for="">NOMBRE</label><input type="text" name="nombre" id="nombre"value="<?php echo $nombre?>"><p>
        <label for="">POBLACION</label><input type="text" name="poblacion" id="poblacion"value="<?php echo $poblacion?>"><p>
        <label for="">MONEDA</label><input type="text" name="moneda" id="moneda"value="<?php echo $moneda?>"><p>
        <label for="">CAPITAL</label><input type="text" name="capital" id="capital"value="<?php echo $capital?>"><p>  
                
         
                <input type="submit" value="EDITAR  "><p>

</body>
</html>