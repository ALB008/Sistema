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
        <?php include("validarlibro.php")?>
    </form>
        
    </body>
</html>