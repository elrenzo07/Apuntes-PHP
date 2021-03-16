<?php
    require "conexion.php";
    class DevuelveProductos extends Conexion{
        public function __construct(){ //constructor de la clase DevuelveProductos
            parent::__construct();      //llamada a constructor de la clase Conexion
        }

        public function get_productos($dato){
            $sql = 'SELECT * FROM PRODUCTOS WHERE SECCION = "' . $dato . '"';
            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();
            return $resultado;
            $this->conexion_db=null;
        
        }




        // public function get_productos(){
        //     $resultado=$this->conexion_db->query('SELECT * FROM PRODUCTOS');
        //     $productos = $resultado->fetch_all(MYSQLI_ASSOC);
        //     return $productos;
        // }
    }

?>