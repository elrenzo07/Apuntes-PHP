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
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("location:login.php");
        }
    ?>

    <h1>Página principal para usuarios logeados</h1>
    <?php
        echo "Bienvenido, " . $_SESSION["usuario"];
    ?>
    <a href="cerrar.php">Cerrar sesión</a>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat commodi reiciendis expedita totam dolorem neque cum eius vel repudiandae quo obcaecati eveniet, tenetur assumenda, adipisci dolores quam quas, delectus praesentium.</p>
</body>
</html>