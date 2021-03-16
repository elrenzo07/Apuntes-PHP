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

    $conexion = mysqli_connect($bd_host,$bd_usuario,$bd_contra); //crea la conexion con la BD
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    } //esto sirve para detener la ejecucion del programa a partir de la falta de conexion;

    mysqli_set_charset($conexion, "utf8"); //para que tome los caracteres latinos;

    mysqli_select_db($conexion,$bd_nombre) or die ("No se encuentra la BBDD");


    $consulta = "SELECT * FROM DATOSPERSONALES";
    $resultado = mysqli_query($conexion,$consulta); //Almaceno toda la tabla en resultado

    $fila = mysqli_fetch_row($resultado);
    do{
        for($i=0;$i<count($fila);$i++){
            echo "$fila[$i] <br>";
        }
        $fila = mysqli_fetch_row($resultado);
    }while(isset($fila)); //recorre toda la fila y si hay mas valores los toma y los muestra.
    mysqli_close($conexion); //cerrar la base de datos al finalizar la consulta.

    ?>
</body>
</html>