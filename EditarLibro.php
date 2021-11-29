<?php
    require_once "conexion.php";
    if(isset($_POST['submit'])){
        $cod_lib = $_POST['cod'];
        $nombre_lib = $_POST['nombre'];
        $estado_lib = "En biblioteca";
        $autor_lib = $_POST['autor'];
        $genero_lib = $_POST['genero'];
        $editorial_lib = $_POST['editorial'];
        $anno_lib = $_POST['anno'];
        $paginas_lib = $_POST['paginas'];
        $isbn_lib = $_POST['isbn'];
        $x = 0;
    }
    $obj = new conectar();
    $conexion=$obj->conexion();
    $id=$_GET['Cod_lib'];
    $sql="SELECT Cod_lib,Nom_lib,Aut_lib,Gen_lib,Edit_lib,Anno_lib,Pag_lib,ISBN_lib FROM libro WHERE Cod_lib='$id'";
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Editar libros</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
</head>
<body>
<form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Información del libro</h1>
        <label for="">Ingresa el código: </label> <br>
        <input type="text" name="cod" value="<?php 
            echo $ver[0]; ?>"> <br> <br>
        <label for="">Ingresa el título:</label> <br>
        <input type="text" name="nombre" value="<?php 
            echo $ver[1]; ?>"> <br> <br>
        <label for="">Ingresa el nombre del autor:</label> <br>
        <input type="text" name="autor" value="<?php
            echo $ver[2];?>"> <br> <br>
        <label for="">Ingresa el género: </label> <br>
        <input type="text" name="genero" value="<?php 
            echo $ver[3];?>"> <br> <br>
        <label for="">Ingresa la editorial:</label> <br>
        <input type="text" name="editorial" value="<?php 
            echo $ver[4];?>"> <br> <br>
        <label for="">Ingresa el año de publicación:</label> <br>
        <input type="text" name="anno" value="<?php 
            echo $ver[5]?>"> <br> <br>
        <label for="">Ingresa la cantidad de páginas:</label> <br>
        <input type="text" name="paginas" value="<?php 
            echo $ver[6] ?>"> <br> <br>
        <label for="">Ingresa el código ISBN:</label> <br>
        <input type="text" name="isbn" value="<?php 
            echo $ver[7]?>"> <br> <br>
        <button name="submit" class="boton">Actualizar</button>
        <br><br>
        <button class="boton"><a href="Libros.php" id="a">Cancelar</a></button>

        <?php 
    #------------------------Verificar Datos--------------------
    if(isset($_POST['submit'])){
        $patron = "/^[a-zA-Z\d]*$/";
        if (empty($cod_lib)){
            echo "<p class = 'error'>* El código del libro esta vacío</p>";
            $x=$x+1;
        }
        if(empty($nombre_lib)){
            echo "<p class = 'error'>* El titulo del libro esta vacío</p>";
            $x=$x+1;
        } else{
            if(!is_string($nombre_lib)){
                echo "<p class='error'>* Debes ingresar un título de libro válido</p>";
                $x=$x+1;
            }
        }
        if(empty($autor_lib)){
            echo "<p class = 'error'>* El nombre del autor esta vacío</p>";
            $x=$x+1;
        } else{
            if(!is_string($autor_lib)){
                echo "<p class='error'>* Debes ingresar un nombre de autor válido</p>";
                $x=$x+1;
            }
        }
        if(empty($genero_lib)){
            echo "<p class = 'error'>* El género del libro esta vacío</p>";
            $x=$x+1;
        } else{
            if(!is_string($genero_lib)){
                echo "<p class='error'>* Debes ingresar un género literario válido</p>";
                $x=$x+1;
            }
        }
        if(empty($editorial_lib)){
            echo "<p class = 'error'>* La editorial del libro esta vacía</p>";
            $x=$x+1;
        } else{
            if(!is_string($editorial_lib)){
                echo "<p class='error'>* Debes ingresar un nombre de editorial válido</p>";
                $x=$x+1;
            }
        }
        if(empty($anno_lib)){
            echo "<p class = 'error'>* El año del libro esta vacío</p>";
            $x=$x+1;
        } else{
            if (!ctype_digit($anno_lib) or $anno_lib>date("Y")){
                echo "<p class='error'>* Debes ingresar un año de publicación válido</p>";
                $x=$x+1;
            }
        }
        if(empty($paginas_lib)){
            echo "<p class = 'error'>* La cantidad de páginas del libro esta vacía</p>";
            $x=$x+1;
        } else{
            if (!ctype_digit($paginas_lib)){
                echo "<p class='error'>* Debes ingresar un número válido para la cantidad de páginas</p>";
                $x=$x+1;
            }
        }
        if(empty($isbn_lib)){
            echo "<p class = 'error'>* El ISBN del libro esta vacío</p>";
            $x+=$x;
        } else{
            if(!ctype_digit($isbn_lib)){
                echo "<p class='error'>* Debes ingresar un ISBN válido</p>";
                $x=$x+1;
            }
        }


    if ($x<1){
        require_once "conexion.php";
        require_once "libro.php";

        $cod_lib = $_POST['cod'];
        $nombre_lib = $_POST['nombre'];
        $autor_lib = $_POST['autor'];
        $genero_lib = $_POST['genero'];
        $editorial_lib = $_POST['editorial'];
        $anno_lib = $_POST['anno'];
        $paginas_lib = $_POST['paginas'];
        $isbn_lib = $_POST['isbn'];

        $datos=array($cod_lib,$nombre_lib,$autor_lib,$genero_lib,$editorial_lib,$anno_lib,$paginas_lib,$isbn_lib,$id);
        $obj = new libro();
        if ($obj->update($datos)==1){
            header("location: libros.php");
        } else{
            echo "<br>Fallo al insertar";
        }
        
    }
    }
    ?>
    </form>
    
</body>
</html>