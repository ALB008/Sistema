<?php
include_once "conexion.php";
class usuario extends conectar{
    public $id;
    public $nom;
    public $nacim;
    public $tel;
    public $cor;

    public function read($sql){
        $c= new conectar();
        $conexion=$c->conexion();

        $result=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function create($datos){
        $c= new conectar();
        $conexion=$c->conexion();

        $sql = "INSERT INTO usuario(Id_usu, Nom_usu, Nacim_usu, Tel_usu, Cor_usu) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')";

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