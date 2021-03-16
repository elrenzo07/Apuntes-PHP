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
    echo "TExto de prueba <br>";
    function nombreDeFuncion() {
        echo "esto es lo ue hay dentro de la funcion<br>";
    }

    nombreDeFuncion();
    nombreDeFuncion();
    nombreDeFuncion();
    nombreDeFuncion();
    include ("index1.php"); //incluir codigo, se puede llamar desde fuera funciones dentro de el archivo externo
/*se puede usar require en vez de include, require es mas restrictivo. si no lo encuentra termina el código ahí.*/
    ?>
</body>
</html>