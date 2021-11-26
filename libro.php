<?php
include_once "conexion.php";
class libro extends conectar{
    private $cod;
    private $nombre;
    private $autor;
    private $genero;
    private $editorial;
    private $anno;
    private $paginas;
    private $isbn;

    public function create(){
        $sql = "CALL Add_book('$this->cod', '$this->nombre', '$this->autor', '$this->genero', '$this->editorial', '$this->anno', '$this->paginas', '$this->isbn')";
        #$result=mysqli_query($conexion,$sql);
        if($sql){
            echo "<script>window.alert('Datos almacenados correctamente')</script>";
        }else{
            die(mysqli_error($conexion));
            echo "G A R F I O";
        }
    }









}
?>