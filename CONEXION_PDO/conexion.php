<?php
    require "config.php";
    class conexion{
        protected $conexion_db;
        public function __construct(){
            try {
                $this->conexion_db = new PDO('mysql:host=localhost;dbname=pruebas','root','');
                $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //REPORTE DE ERRORES, LANZA EXCEPCION.
                $this->conexion_db->exec("SET CHARACTER SET utf8");
            } catch (Exception $e) {
                die('Error: ' . $e->GetMessage()); //ejecuto metodo para mostrar mensaje
            }


        /*---------------------------------------------CON MYSQLI---------------------------------------------------
            $this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
            if($this->conexion_db->connect_errno){
                echo "No se ha podido conectar con la base de datos <br><br>";
                echo $this->conexion_db->connect_error;
                return;
            }
            $this->conexion_db->set_charset(DB_CHARSET);
            */
        }


    }

?>