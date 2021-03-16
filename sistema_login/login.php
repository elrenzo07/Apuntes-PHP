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
    <h1>INTRUDUCE TUS DATOS</h1>
    <form action = "comprueba_login.php" method = "POST">
    <table class = "tabla">
        <tr><td>USUARIO</td><td><input type ="text" name = "login"></td></tr>
        <tr><td>CONTRASEÑA</td><td><input type = "password" name = "password"></td></tr>
        <tr><td colspan = "2"><input type = "submit" name ="enviar" value = "LOGIN" class = "boton"></td></tr>
    </table></form>
</body>
</html>