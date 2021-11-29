<?php
include_once "conexion.php";
class libro extends conectar{
    public $cod;
    public $nombre;
    public $estado;
    public $autor;
    public $genero;
    public $editorial;
    public $anno;
    public $paginas;
    public $isbn;

    public function read($sql){
        $c= new conectar();
        $conexion=$c->conexion();

        $result=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function create($datos){
        $c= new conectar();
        $conexion=$c->conexion();

        $sql = "INSERT INTO libro(cod_lib,Nom_lib,Estado_lib,Aut_lib,Gen_lib,Edit_lib,Anno_lib,Pag_lib,ISBN_lib) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]', '$datos[7]', '$datos[8]')";

        return $result=mysqli_query($conexion,$sql);
        
    }

    public function update($datos){
        $c= new conectar();
        $conexion=$c->conexion();

        $sql="UPDATE libro set Cod_lib='$datos[0]',Nom_lib='$datos[1]', Aut_lib='$datos[2]', Gen_lib=$datos[3], Edit_lib='$datos[4]', Anno_lib='$datos[5]', Pag_lib='$datos[6]', ISBN_lib='$datos[7]' WHERE Cod_lib='$datos[8]'";
        return $result=mysqli_query($conexion,$sql);
    }

    public function delete($id){
        $c= new conectar();
        $conexion=$c->conexion();
        $sql="DELETE from libro where Cod_lib='$id'";
        return $result=mysqli_query($conexion,$sql);
    }


}
?>