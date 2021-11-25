<?php
    class conectar{
        private $servidor="localhost";
        private $usser="root";
        private $pass="";
        private $db="biblioteca";

        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                     $this->usser,
                                     $this->pass,
                                     $this->db);

            return $conexion;
        }    
    }
?>