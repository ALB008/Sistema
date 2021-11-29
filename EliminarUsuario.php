<?php

    $id=$_GET['Id_usu'];

    require_once "conexion.php";
    require_once "usuario.php";

    $obj = new usuario();
    if ($obj->delete($id)==1){
        header("location: Usuarios.php");
    } else{
        echo "<br>Fallo al borrar";
        }

?>