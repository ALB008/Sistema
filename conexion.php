<?php
    class conectar{
        private $server = "localhost";
        private $usser = "root";
        private $db = "biblioteca";
        private $pass = "";

        public function conexion(){
            $conexion=mysqli_connect($this->server,$this->usser,$this->pass,$this->db);
            return $conexion;
        }
    }
?>