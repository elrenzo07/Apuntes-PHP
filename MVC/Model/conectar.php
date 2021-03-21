<?php

class Conectar{
    public static function conexion(){
        try {
            $base = new PDO("mysql:hostname=localhost; dbname=pruebas", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
            echo "Linea del error: " . $e->getLine();
        }
        return $base;
    }
}
?>