<?php namespace Modelos;
   class Conexion{

        private $datos = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "db" => "pventasdb"
        );

        private $con;

        public function __construct(){
            $this->con = new \mysqli($this->datos['host'],
                $this->datos['user'], $this->datos['pass'],
                $this->datos['db']);
        }

        public function setConsulta($sql){
            $this->con->query($sql);
        }

        public function getConsulta($sql){
            $datos = $this->con->query($sql);
            return $datos;
        }




    }  



?>