<?php
    require_once "conexion.php";
    require_once "usuario.php";
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    
</head>
<body>
    
    <table>
    <tr>
            <td><button class="boton"><a href="RegistroUsuario.php" id="a">Nuevo usuario</a></button></td>
            <td></td>
            <td></td>
            <td><button class="boton"><a href="centro.html" id="a">Regresar</a></button></td>
        </tr>
        
        <tr class="boton" style="font-size:20px">
            <td>ID</td>
            <td>Nombre</td>
            <td>Teléfono</td>
            <td>Opciones</td>
        </tr>
<?php
    $obj = New usuario();
    $sql = "SELECT Id_usu,Nom_usu, Tel_usu FROM usuario";
    $datos=$obj->read($sql);
    foreach ($datos as $key) {
?>
        <tr>
            <td><?php echo $key['Id_usu']; ?></td>
            <td><?php echo $key['Nom_usu']; ?></td>
            <td><?php echo $key['Tel_usu']; ?></td>
            <td>
                <a href="EditarUsuario.php?Id_usu=<?php echo $key['Id_usu']; ?>" style="color:blue">
                Editar
                </a>  
                <a href="EliminarUsuario.php?Id_usu=<?php echo $key['Id_usu']; ?>" style="color:blue">
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