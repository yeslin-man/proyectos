<?php

    class Conexion{
        private $host = 'localhost';
        private $usuario = 'root';
        private $pass = '';
        private $dbname= 'spa';

        public function conectar(){
            try {
                $con = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8",$this->usuario,$this->pass);
                // echo 'Exitoso';
                return $con;
            } catch (PDOException $e) {
                echo "Error en la conexión o consulta: " . $e->getMessage();
            }
            
        }
    }

?>