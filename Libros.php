<?php
    require_once "conexion.php";
    require_once "libro.php";
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <title>Libros</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    
</head>
<body>
    
    <table>
        <tr>
            <td><button class="boton"><a href="RegistroLibro.php" id="a">Nuevo libro</a></button></td>
            <td></td>
            <td></td>
            <td></td>
            <td><button class="boton"><a href="centro.html" id="a">Regresar</a></button></td>
        </tr>
        <tr class="boton" style="font-size:20px">
            <td>Código</td>
            <td>Título</td>
            <td>Autor</td>
            <td>Estado</td>
            <td>Opciones</td>
        </tr>
<?php
    $obj = New libro;
    $sql = "SELECT Cod_lib,Nom_lib, Aut_lib, Estado_lib FROM libro";
    $datos=$obj->read($sql);
    foreach ($datos as $key) {
?>
        <tr>
            <td><?php echo $key['Cod_lib']; ?></td>
            <td><?php echo $key['Nom_lib']; ?></td>
            <td><?php echo $key['Aut_lib']; ?></td>
            <td><?php echo $key['Estado_lib']; ?></td>
            <td>
                <a href="EditarLibro.php?Cod_lib=<?php echo $key['Cod_lib']; ?>" style="color:blue">
                Editar
                </a>  
                <a href="EliminarLibro.php?Cod_lib=<?php echo $key['Cod_lib']; ?>" style="color:blue">
                Eliminar
                </a>    
        </td>
        </tr>
<?php
    }
?>
    </table>
    
    
</body>
</html>