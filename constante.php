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
        //constante, son globales. solo almacena valores, no arrays.
        define("nombre_de_constante", "renzo", false); //Sencibilidad a mayusculas y minusculas del nombre de la constante para llamadas.
        echo nombre_de_constante;
        echo "<br>" . nombre_de_constante . " Ahopra si se puede concatenar con punto <br>";
    ?>
</body>
</html>