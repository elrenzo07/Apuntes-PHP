<?php
class Productos_modelo{
    private $db;
    private $productos;

    public function __construct(){
        require_once("Model/conectar.php");
        $this->db=Conectar::conexion(); //de clase Conectar saca la funcion estatica conectar.
        $this->productos = array(); //le dice al programa que esta variable es un array.

    }
    public function get_productos(){
        $consulta= $this->db->query("SELECT * FROM PRODUCTOS");
        while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
            $this->productos[]=$filas;
        }
        return $this->productos;
    }


}
?>