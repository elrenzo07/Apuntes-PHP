<?php
require "DevuelveProductos.php";
$productos = new DevuelveProductos();
$busqueda = $_POST['secc'];
$array_productos = $productos->get_productos($busqueda);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($array_productos as $elemento){
            echo "<table><tr><td>";
            echo $elemento['CODIGOARTICULO'] . "</td><td>";
            echo $elemento['NOMBREARTICULO'] . "</td><td>";
            echo $elemento['SECCION'] . "</td><td>";
            echo $elemento['PRECIO'] . "</td><td>";
            echo $elemento['FECHA'] . "</td><td>";
            echo $elemento['IMPORTADO'] . "</td><td>";
            echo $elemento['PAISDEORIGEN'] . "</td><td></tr></table><br>";
        }
    ?>
    
</body>
</html>