<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method = "post">
    <label for="num1">1º Termino</label>
    <input type = "text" name = "num1" id="num1" placeholder="ingrese un valor">
    <label for="num2">2º Termino</label>
    <input type="text" name ="num2" id="num2" placeholder="ingrese un valor">
    <label for="operacion">Operación</label>
    <select name = "operacion" id="operacion">
        <option>Suma</option>
        <option>Resta</option>
        <option>Multiplicacion</option>
        <option>Division</option>
        <option>Resto</option>
    </select>
    <input type="submit" name = "button" id="button" value = "Operar" onClick="prueba">
</form>
<p>&nbsp;</p>
<?php
    if (isset($_POST["button"])){
        echo "Has presionado enviar <br>";
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        if(!strcmp("Suma", $operacion)){
            echo "El resultado es: " . ($numero1 + $numero2);
        }
        if(!strcmp("Resta", $operacion)){
            echo "El resultado es: " . ($numero1 - $numero2);
        }
        if(!strcmp("Multiplicacion", $operacion)){
            echo "El resultado es: " . ($numero1 * $numero2);
        }
        if(!strcmp("Division", $operacion)){
            echo "El resultado es: " . ($numero1 / $numero2);
        }
        if(!strcmp("Resto", $operacion)){
            echo "El resultado es: " . ($numero1 % $numero2);
        }
    }

    ?>
</body>
</html>