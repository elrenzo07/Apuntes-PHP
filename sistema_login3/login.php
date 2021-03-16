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
            $base = new PDO('mysql:host=localhost;dbname=pruebas','root','');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //REPORTE DE ERRORES, LANZA EXCEPCION.
            $base->exec("SET CHARACTER SET utf8");

            $sql = 'SELECT * FROM USUARIOS_PASS WHERE USUARIOS = :LOG_IN AND PASSWORD = :PASS';
            $resultado = $base->prepare($sql);
            $log= htmlentities(addslashes($_POST["login"]));
            $pas=htmlentities(addslashes($_POST["password"]));
            
            
            $resultado->bindValue(":LOG_IN",$log,PDO::PARAM_STR);
            $resultado->bindValue(":PASS",$pas,PDO::PARAM_STR);
            $resultado->execute();

            //usa un comparador para verificar si hay coincidencia con algo de la BBDD.
            $numero_registro = $resultado->rowCount();//devuelve 0 si no hay coincidencias y 1 si las hay.
            if($numero_registro!=0){
                //ENTRA EN LA SESION
                $autentic = true;
                if(isset($_POST["recordar"])){
                    setcookie("usuario",$_POST["login"],time()+86400);
                }

            }else{
                echo "Usuario o contraseña incorrecto<br>";
            }

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
<div class = caja1><img src="img/cityscape.jpg" alt="city"></div>
</body>
</html>