<?php
    if(isset($_POST['submit'])){
        $nombre_edit=$_POST['nombre'];
        $ciud_edit=$_POST['ciudad'];
        $tel_usu=$_POST['tel'];
        $correo_usu=$_POST['correo'];
        $genero_usu=$_POST['genero'];
        $x=0;
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro de Editoriales</title>
        <link rel="stylesheet" href="css">
        <meta charset="utf-8">
    </head>
    <body>
    <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Información de la Editorial</h1>
    
        <label for="">Ingresa el nombre:</label> <br>
        <input type="text" name="nombre" value="<?php
         if(isset($nombre_edit)){echo $nombre_edit;}?>"> <br> <br>
        <label for="">Ingresa la ciudad: </label> <br>
        <input type="text"name="ciudad" value="<?php
         if(isset($tel_usu)){echo $tel_usu;} ?>"> <br><br>
        <label for="">Ingresa la dirección: </label> <br>
        <input type="text" name="correo" value="<?php
         if(isset($correo_usu)){echo $correo_usu;} ?>"> <br> <br>
        <label for="">Ingresar el teléfono: </label> <br>
        <input type="text" name="genero" value="<?php
         if(isset($genero_usu)){ echo $genero_usu;} ?>"> <br> <br> <br>

        <input type="submit" name="submit">
    
    <?php
    if(isset($_POST['submit'])){
        if(empty($id_usu)){
            echo "<p class = 'error'>* La identificación del usuario esta vacía</p>";
        } else{
            if(!ctype_digit($id_usu)){
                echo "<p class = 'error'>* La identificación del usuario no es válida</p>";
            }
        }if(empty($nombre_usu)){
            echo "<p class = 'error'>* El nombre del usuario esta vacío</p>";
        } else{
            if(!ctype_digit($nombre_usu)){
                echo "<p class = 'error'>* El nombre del usuario no es válido</p>";
            }
        }if(empty($nacim_usu)){
            echo "<p class = 'error'>* La fecha de nacimiento del usuario esta vacía</p>";
        } else{
            if($nacim_usu>date_default_timezone_get()){
                echo "<p class = 'error'>* La fecha de nacimiento del usuario no es válida</p>";
            }
        }if(empty($tel_usu)){
            echo "<p class = 'error'>* El número de contacto del usuario esta vacío</p>";
        } else{
            if(!ctype_digit($tel_usu)){
                echo "<p class = 'error'>* El número de contacto del usuario no es válido</p>";
            }
        }if(empty($correo_usu)){
            echo "<p class = 'error'>* El correo del usuario esta vacía</p>";
        } else{
            if(!filter_var($correo_usu, FILTER_VALIDATE_EMAIL)){
                echo "<p class = 'error'>* El corro del usuario no es válido</p>";
            }
        }if(empty($genero_usu)){
            echo "<p class = 'error'>* El género del usuario esta vacío</p>";
        } else{
            if(!is_string($genero_usu)){
                echo "<p class = 'error'>* El género del usuario no es válido</p>";
            }
        }
    }



    ?>
    
    </form>
    </body>
</html>