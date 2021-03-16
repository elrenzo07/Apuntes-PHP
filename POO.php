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
class vehiculo{
    public $ruedas;
    public $estado;
    public $motor;
    public $modelo_vehiculo;

    public function __construct(){    //constructor (tiene el mismo nombre que la clase)$ruedas,$estado,$motor
        $this->ruedas = 4;
        $this->estado = "detenido";
        $this->motor = 1600;
        $this->modelo_vehiculo = $modelo;
    }

    function cant_ruedas(){
        echo "El $this->modelo_vehiculo tiene " . $this->ruedas . " ruedas. <br>";
    }

}

class moto extends vehiculo{
    
}
$fiat600 = new vehiculo();
$fiat600->cant_ruedas("Fiat 600");


?>
</body>
</html>