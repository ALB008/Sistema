<?php 
if(isset($_POST['submit'])){
    $cod = $_POST['cod'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $editorial = $_POST['editorial'];
    $anno = $_POST['anno'];
    $paginas = $_POST['paginas'];
    $isbn = $_POST['isbn'];
    $x = 0;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro de Libros</title>
        <link rel="stylesheet" href="css">
        <meta chartset="utf-8">
    </head>
    <body>

    <form action="<?php 
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <h1>Información del libro</h1>
        <label for="">Ingresa el código: </label> <br>
        <input type="text" name="cod" value="<?php 
            if(isset($cod)){ echo $cod;} ?>"> <br> <br>
        <label for="">Ingresa el título:</label> <br>
        <input type="text" name="nombre" value="<?php 
            if(isset($nombre)){ echo $nombre;} ?>"> <br> <br>
        <label for="">Ingresa el nombre del autor:</label> <br>
        <input type="text" name="autor" value="<?php 
            if(isset($autor)){ echo $autor;} ?>"> <br> <br>
        <label for="">Ingresa el género: </label> <br>
        <input type="text" name="genero" value="<?php 
            if(isset($genero)){ echo $genero;} ?>"> <br> <br>
        <label for="">Ingresa la editorial:</label> <br>
        <input type="text" name="editorial" value="<?php 
            if(isset($editorial)){ echo $editorial;} ?>"> <br> <br>
        <label for="">Ingresa el año de publicación:</label> <br>
        <input type="text" name="anno" value="<?php 
            if(isset($anno)){ echo $anno;} ?>"> <br> <br>
        <label for="">Ingresa la cantidad de páginas:</label> <br>
        <input type="text" name="paginas" value="<?php 
            if(isset($paginas)){ echo $paginas;} ?>"> <br> <br>
        <label for="">Ingresa el código ISBN:</label> <br>
        <input type="text" name="isbn" value="<?php 
            if(isset($isbn)){ echo $isbn;} ?>"> <br> <br> <br>
        <input type="submit" name="submit">

    </form>

<?php 
if(isset($_POST['submit'])){
    $patron = "/^[a-zA-Z\d]*$/";
    if (empty($cod)){
        echo "<p class = 'error'>* El código del libro esta vacío</p>";
        $x+=$x;
    }
    if(empty($nombre)){
        echo "<p class = 'error'>* El titulo del libro esta vacío</p>";
        $x+=$x;
    } else{
        if(!is_string($nombre)){
            echo "<p class='error'>* Debes ingresar un título de libro válido</p>";
            $x+=$x;
        }
    }
    if(empty($autor)){
        echo "<p class = 'error'>* El nombre del autor esta vacío</p>";
        $x+=$x;
    } else{
        if(!is_string($autor)){
            echo "<p class='error'>* Debes ingresar un nombre de autor válido</p>";
            $x+=$x;
        }
    }
    if(empty($genero)){
        echo "<p class = 'error'>* El género del libro esta vacío</p>";
        $x+=$x;
    } else{
        if(!is_string($genero)){
            echo "<p class='error'>* Debes ingresar un género literario válido</p>";
            $x+=$x;
        }
    }
    if(empty($editorial)){
        echo "<p class = 'error'>* La editorial del libro esta vacía</p>";
        $x+=$x;
    } else{
        if(!is_string($editorial)){
            echo "<p class='error'>* Debes ingresar un nombre de editorial válido</p>";
            $x+=$x;
        }
    }
    if(empty($anno)){
        echo "<p class = 'error'>* El año del libro esta vacío</p>";
        $x+=$x;
    } else{
        if (!ctype_digit($anno) or $anno>date("Y")){
            echo "<p class='error'>* Debes ingresar un año de publicación válido</p>";
            $x+=$x;
        }
    }
    if(empty($paginas)){
        echo "<p class = 'error'>* La cantidad de páginas del libro esta vacía</p>";
        $x+=$x;
    } else{
        if (!ctype_digit($paginas)){
            echo "<p class='error'>* Debes ingresar un número válido para la cantidad de páginas</p>";
            $x+=$x;
        }
    }
    if(empty($isbn)){
        echo "<p class = 'error'>* El ISBN del libro esta vacío</p>";
        $x+=$x;
    } else{
        if(!ctype_digit($isbn)){
            echo "<p class='error'>* Debes ingresar un ISBN válido</p>";
            $x+=$x;
        }
    }


if ($x==0){
    include_once "libro.php";
    $book= new libro();
    $book->create();
}
}
?>
        
    </body>
</html>