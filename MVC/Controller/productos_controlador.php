<?php
require_once("Model/productos_model.php");
$productos = new Productos_modelo;
$matrizProductos = $productos->get_productos();

require_once("View/productos_vista.php");


?>