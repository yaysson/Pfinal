<?php
    include "clase/conexion.php";
    include "clase/pais.php";

    $objconexion = new conexion();
    $objpais = new pais();

    $objconexion = $objconexion->conectar();
    $paises = $objpais->consultar($objconexion);


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
    <table>
        <tr>
            <th>nombre</th>
            <th>poblacion</th>
            <th>moneda</th>
            <th>capital</th>
            <th>editar</th>
            <th>eliminar</th>
        </tr>

    
    <?php
        while($pais = mysqli_fetch_array($paises)){

    ?>
        <tr>
            <td><?php echo $pais['nombre'] ?></td>
            <td><?php echo $pais['poblacion'] ?></td>
            <td><?php echo $pais['moneda'] ?></td>
            <td><?php echo $pais['capital'] ?></td>
           
            <td><a href="editar.php?id= <?php echo $pais['id_pais']?>">editar</a></td>
            <td><a href="controlador/eliminar.php?id_pais=<?php echo $pais['id_pais']?>">ELIMINAR</a></td>


        </tr>

    <?php
         }
    ?>
    </table>
    
</body>
</html>