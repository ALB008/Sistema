<?php
if(isset($_POST['submit'])){
    if (empty($cod)){
        echo "<p class = 'error'>* El código del libro esta vacío</p>";
        $x+=$x;
    }
    if(empty($nombre)){
        echo "<p class = 'error'>* El titulo del libro esta vacío</p>";
        $x+=$x;
    }
    if(empty($autor)){
        echo "<p class = 'error'>* El nombre del autor esta vacío</p>";
        $x+=$x;
    }
    if(empty($genero)){
        echo "<p class = 'error'>* El género del libro esta vacío</p>";
        $x+=$x;
    }
    if(empty($editorial)){
        echo "<p class = 'error'>* La editorial del libro esta vacía</p>";
        $x+=$x;
    }
    if(empty($anno)){
        echo "<p class = 'error'>* El año del libro esta vacío</p>";
        $x+=$x;
    }
    if(empty($paginas)){
        echo "<p class = 'error'>* La cantidad de páginas del libro esta vacía</p>";
        $x+=$x;
    }
    if(empty($isbn)){
        echo "<p class = 'error'>* El ISBN del libro esta vacío</p>";
        $x+=$x;
    }

    
if ($x<=0){
    include_once "libro.php";
    $book= new libro();
    $book->create();
}


}
?>