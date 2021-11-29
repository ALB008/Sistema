<?php

    $id=$_GET['Cod_lib'];

    require_once "conexion.php";
    require_once "libro.php";

    $obj = new libro();
    if ($obj->delete($id)==1){
        header("location: Libros.php");
    } else{
        echo "<br>Fallo al borrar";
        }

?>