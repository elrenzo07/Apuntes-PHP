<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
        }
        .tabla{
            border: 1px solid #F00;
            width:300px;
            margin:auto;
        }
        input{
            margin:5px;
        }
        .boton{
            width: 300px;
        }
    </style>
</head>
<body>
<?php
$autentic = false;
if(isset($_POST["enviar"])){
        try {
            $log= htmlentities(addslashes($_POST["login"]));//RESCATA LO INGRESADO Y EXTRAE CARACTERES EXTRAÑOS.
            $pas=htmlentities(addslashes($_POST["password"]));

            $base = new PDO('mysql:host=localhost;dbname=pruebas','root','');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //REPORTE DE ERRORES, LANZA EXCEPCION.
            $base->exec("SET CHARACTER SET utf8");

            $sql = 'SELECT * FROM USUARIOS_PASS WHERE USUARIOS = :LOG_IN';
            $resultado = $base->prepare($sql);
            
            $resultado->execute(array(":LOG_IN"=>$log));

            while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){
                if(password_verify($pas,$registro["PASSWORD"])){
                    $autentic = true; //INGRESA AL SITIO.
                    echo "Login exitoso <br> Bienvenido, " . $registro['USUARIOS'];
                }


                /*echo "Usuario: " . $registro["USUARIOS"] . "<br>";
                echo "Contraseña: " . $registro["PASSWORD"] . "<br>";*/

            }

            $resultado->closeCursor();

        } catch (Exception $e) {
            die('Error: ' . $e->getMessage()); //ejecuto metodo para mostrar mensaje
        }
    }?>
    <?php
    if($autentic==false){
        if(!isset($_COOKIE["usuario"])){
            include "formulario.html";
        }
    }
    ?>
</body>
</html>