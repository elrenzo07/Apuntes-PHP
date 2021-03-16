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
    print "texto que deberá salir en pantalla <br>"; //comentario
    print "hola mundo <br>"; /* comentario de varias líneas*/
    print "texto 2 <br>";
    //VARIABLES
    $NOMBRE = "RENZO";
    $EDAD = 32;
    print "El nombre es " . $NOMBRE . " y tiene $EDAD <br>"; //funcion(consume mas recursos)
    print 'El nombre es " . $NOMBRE . " y tiene $EDAD';
    echo "El nombre es " . $NOMBRE . " y tiene $EDAD <br>";
    echo $NOMBRE,$EDAD; //expresion



    ?>
</body>
</html>