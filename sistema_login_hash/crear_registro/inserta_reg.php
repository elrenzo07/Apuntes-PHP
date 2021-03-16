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
        $usuario = $_POST["usuario"];
        $contra = password_hash($_POST["contra"],PASSWORD_DEFAULT); //CREA EL CIFRADO DE CONTRASEÑA
        if(isset($_POST["enviar"])){
            try {
                $base = new PDO('mysql:host=localhost;dbname=pruebas','root','');
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //REPORTE DE ERRORES, LANZA EXCEPCION.
                $base->exec("SET CHARACTER SET utf8");
    
                $sql = 'INSERT INTO USUARIOS_PASS (USUARIOS, PASSWORD) VALUES (:USER, :PASS)';
                $resultado = $base->prepare($sql);
                
                $resultado->execute(array(":USER"=>$usuario, ":PASS"=>$contra));
    
                //usa un comparador para verificar si hay coincidencia con algo de la BBDD.
                $numero_registro = $resultado->rowCount();//devuelve 0 si no hay coincidencias y 1 si las hay.
                if($numero_registro!=0){
                    echo "SE HA CARGADO UN NUEVO USUARIO";
    
                }else{
                    echo "ERROR AL CARGAR USUARIO";
                }
    
            } catch (Exception $e) {
                die('Error: ' . $e->getMessage()); //ejecuto metodo para mostrar mensaje
            }
        }
    ?>
</body>
</html>