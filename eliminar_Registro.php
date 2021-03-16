
<!-- para que esto funcione hay que vincularlo por medio de un boton de submit
todavia no se como poner un boton distinto para el caso method = "get"-->


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
//_______________________CONEXION____________________________________________________________________
    $conexion = mysqli_connect($bd_host,$bd_usuario,$bd_contra); //crea la conexion con mysql
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD";
        exit();
    } //esto sirve para detener la ejecucion del programa a partir de la falta de conexion con mysql;

    mysqli_set_charset($conexion, "utf8"); //para que tome los caracteres latinos;

    mysqli_select_db($conexion,$bd_nombre) or die ("No se encuentra la BBDD");
//________________________DATOS OBTENIDOS DE LOS INPUTS_______________________________________________________________________________
$cod = $_GET["c_art"];
$sec = $_GET["seccion"];
$nom = $_GET["n_art"];
$pre = (FLOAT)$_GET["precio"];
$fec = $_GET["fecha"];
$imp = $_GET["importado"];
$por = $_GET["p_orig"];
   
//______________________REGISTRO DE DATOS______________________________________________________________________
    $consulta = "DELETE FROM PRODUCTOS WHERE $cod"
    $resultado = mysqli_query($conexion,$consulta); //BORRA LA FILA DE LA BBDD

if ($resultado==false){ //para corroborar que no se generaron errores!
    echo "Error. No se pudo llevar a cabo la petición";
}else{
    $elim = mysqli_affected_rows($conexion);
    if($elim ==0){
        echo "No existen registros que coincidan con lo solitado";
    }elseif($elim ==1){echo "Se ha elimindado $elim registro";}else{
        echo "Se han eliminado $elim registros";
    }
}
/*
    $fila = mysqli_fetch_row($resultado);
    do{
        for($i=0;$i<count($fila);$i++){
            echo "$fila[$i] <br>";
        }
        $fila = mysqli_fetch_row($resultado);
    }while(isset($fila)); //recorre toda la fila y si hay mas valores los toma y los muestra.
    */
    mysqli_close($conexion); //cerrar la base de datos al finalizar la consulta.

    ?>
</body>
</html>