<?php
    require_once "conexion.php";
    if(isset($_POST['submit'])){
        $id_usu=$_POST['id'];
        $nombre_usu=$_POST['nombre'];
        $nacim_usu=$_POST['nacim'];
        $tel_usu=$_POST['tel'];
        $correo_usu=$_POST['correo'];
        $x=0;
    }
    $obj = new conectar();
    $conexion=$obj->conexion();
    $id=$_GET['Id_usu'];
    $sql="SELECT Id_usu,Nom_usu,Nacim_usu,Tel_usu,Cor_usu FROM usuario WHERE Id_usu='$id'";
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro de Usauarios</title>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
    </head>
    <body>
    <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Información del usuario</h1>
        <label for="">Ingresa el documento de identidad: </label> <br>
        <input type="text" name="id" value="<?php 
            echo $ver[0]; ?>"> <br> <br>
        <label for="">Ingresa el nombre:</label> <br>
        <input type="text" name="nombre" value="<?php
            echo $ver[1]?>"> <br> <br>
        <label for="">Ingresa la fecha de nacimiento:</label> <br>
        <input type="date" name="nacim" value="<?php
            echo $ver[2]?>"> <br> <br>
        <label for="">Ingresa el número de contacto: </label> <br>
        <input type="text"name="tel" value="<?php
            echo $ver[3] ?>"> <br><br>
        <label for="">Ingresa el correo: </label> <br>
        <input type="text" name="correo" value="<?php
            echo $ver[4] ?>"><br> <br> <br>
        <button  name="submit" class="boton">Registrar</button>
        <br><br>
        <button class="boton"><a href="Usuarios.php" id="a">Regresar</a></button>
        <br><br>
    
    <?php
    if(isset($_POST['submit'])){
        $patron = "/^[a-zA-Z\d]*$/";
        if(empty($id_usu)){
            echo "<p class = 'error'>* La identificación del usuario esta vacía</p>";
            $x=$x+1;
        } else{
            if(!ctype_digit($id_usu)){
                echo "<p class = 'error'>* La identificación del usuario no es válida</p>";
                $x=$x+1;
            }
        }if(empty($nombre_usu)){
            echo "<p class = 'error'>* El nombre del usuario esta vacío</p>";
            $x=$x+1;
        } else{
            if(!is_strings($nombre_usu)){
                echo "<p class = 'error'>* El nombre del usuario no es válido</p>";
                $x=$x+1;
            }
        }if(empty($nacim_usu)){
            echo "<p class = 'error'>* La fecha de nacimiento del usuario esta vacía</p>";
            $x=$x+1;
        } else{
            if($nacim_usu>date_default_timezone_get()){
                echo "<p class = 'error'>* La fecha de nacimiento del usuario no es válida</p>";
                $x=$x+1;
            }
        }if(empty($tel_usu)){
            echo "<p class = 'error'>* El número de contacto del usuario esta vacío</p>";
            $x=$x+1;
        } else{
            if(!ctype_digit($tel_usu)){
                echo "<p class = 'error'>* El número de contacto del usuario no es válido</p>";
                $x=$x+1;
            }
        }if(empty($correo_usu)){
            echo "<p class = 'error'>* El correo del usuario esta vacía</p>";
            $x=$x+1;
        } else{
            if(!filter_var($correo_usu, FILTER_VALIDATE_EMAIL)){
                echo "<p class = 'error'>* El corro del usuario no es válido</p>";
                $x=$x+1;
            }
        }

        if($x<1){
            require_once "usuario.php";
            require_once "conexion.php";

            $id_usu=$_POST['id'];
            $nombre_usu=$_POST['nombre'];
            $nacim_usu=$_POST['nacim'];
            $tel_usu=$_POST['tel'];
            $correo_usu=$_POST['correo'];
            
            $datos=array($id_usu,$nombre_usu,$nacim_usu,$tel_usu,$correo_usu);
            $obj= new usuario();
            if ($obj->update($datos)==1){
                header("location: Usuarios.php");
            } else{
                echo "<br>Fallo al insertar";
            }
        }





    }



    ?>
    
    </form>
    </body>
</html>