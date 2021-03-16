<?php
if (isset($_POST["enviar"])){
    $usuario = $_POST["usuario"];
    $contra = $_POST["contra"];
function incrementa(&$num){ //el & envia a la variable y no al valor.
    $num++;
    return $num; //no se puede hacer operaciones en return.
}

$numero = 4;
switch (true){
    case $usuario == "Renzo" && $contra == 1234:
        $mensaje = "Ingreso exitoso";
        echo $mensaje . "<br>";
        //funciones predefinidas
        echo strtoupper($mensaje);
        break;
    default:
        
        echo "Acceso denegado";
        for($i=0;$i<10;$i++){
        echo incrementa($numero) . "<br>";
        }
        echo $numero;
}


}

?>