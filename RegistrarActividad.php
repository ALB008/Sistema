<?php


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro de Actividades</title>
        <link rel="stylesheet" href="">
        <meta charset="utf-8">
    </head>
    <body>
        <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Información de la actividad</h1>
        <label for="">Ingresa el nombre</label> <br>
        <input type="text" name="nombre" value="<?php
        if(isset($nombre_activ)){echo $nombre_activ;}?>"> <br> <br>
        <label for="">Ingresa la ubicación: </label> <br>
        <input type="text" name="ubi" value="<?php
        if(isset($ubi_activ)){echo $ubi_activ;}?>"> <br><br>
        <label for="">Ingresar el día de la actividad: </label><br>
        <input type="text" name="dia" value="<?php
        if(isset($dia_activ)){echo $dia_activ;}?>"> <br><br>
        <label for="">Ingresa la hora: </label><br>
        <input type="text" name="hora" value="<?php
        if(isset($hora_activ)){echo $hora_activ;}?>"> <br><br>
        <label for="">Ingresa el límite de participantes:</label><br>
        <input type="text" name="limit" value="<?php
        if(isset($limit_activ)){echo $limit_activ;}?>"><br><br><br>

        <input type="submmit" name="submit">

    <?php
    if(isset($_POST['submit'])){
        
    }

    ?>
    
    </form>
    </body>
</html>