<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <form method ="POST" action="index.php"> <!--PDO.PHP Y PDO2.PHP TAMBIEN USARON ESTE CODIGO-->
        <label for="secc">Sección del articulo y país de origen</label>
        <input type="text" name = "secc" id = "secc">
        <input type="text" name ="p_orig" id = "p_orig">
        <!--para usar marcadores dentro de pdo2 completo con otro item para hacer una busqueda con dos parámetros-->
        <input type="submit" value="Buscar" name = "enviar"> <!--Funciona solo con submit action-->

    </form>
</body>
</html>