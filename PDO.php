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
//pdo y metodo prepare para ejecutar consultas.
//LLAMADO DESDE INDEX.HTML

$busqueda = "%" . $_GET['articulo'] . "%"; //complementar con comodines para que busque en el contenido.
try{
    $base = new PDO('mysql:host=localhost; dbname=pruebas', 'root', ''); //ubicación y basededatos, usuario, contraseña
    //echo "Conexion establecida";
    $base->exec("SET CHARACTER SET utf8"); //configura la codificación
    $sql = "SELECT CODIGOARTICULO, NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO LIKE ?";
    $resultado = $base->prepare($sql); //carga la instrucción.

    $resultado->execute(array($busqueda)); //ejecuta la consulta.
    
    //echo "$busqueda <br>";
    while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
        echo "Codigo articulo: <b color='red'>" . $registro['CODIGOARTICULO'] . "</b> <br>";
        echo "Nombre articulo: <b color='red'>" . $registro['NOMBREARTICULO'] . "</b><br>";
        echo "Sección: <b color='red'>" . $registro['SECCION'] . "</b><br>";
        echo "Precio: <b color='red'>" . $registro['PRECIO'] . "</b><br>";
        echo "País de origen: <b color='red'>" . $registro['PAISDEORIGEN'] . "</b><br>";
    }
    echo "fin del script";
    $resultado->closeCursor();

}catch(Exception $e){ //crea objeto fallo
    die('Error: ' . $e->GetMessage()); //ejecuto metodo para mostrar mensaje
}finally{
    $base = NULL;

}







?>
</body>
</html>