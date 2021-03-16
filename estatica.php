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
        function incrementa(){
            static $contador = 0; //se ejecuta una vez y conserva la variable.
            $contador++;
            echo $contador . "<br>";
        }
        incrementa();
        incrementa();
        incrementa();
        incrementa();
        /* si no estuviera static, cuando se termina la funcion las variables se destruyen*/
    
    ?>
</body>
</html>