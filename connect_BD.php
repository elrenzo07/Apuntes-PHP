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
    $bd_host = "localhost";
    $bd_nombre = "pruebas";
    $bd_usuario = "root";
    $bd_contra = "";

    $conexion = mysqli_connect($bd_host,$bd_usuario,$bd_contra,$bd_nombre); //crea la conexion con la BD
    $consulta = "SELECT * FROM DATOSPERSONALES";
    $resultado = mysqli_query($conexion,$consulta); //Almaceno toda la tabla en resultado

    $fila = mysqli_fetch_row($resultado);
    for($i=0;$i<count($fila);$i++){
        echo "$fila[$i] <br>";
    }



    ?>
</body>
</html>