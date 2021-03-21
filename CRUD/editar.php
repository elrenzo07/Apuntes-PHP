<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACTUALIZAR REGISTROS</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
<?php
include "conexion.php";
if(!isset($_POST["bot_actualizar"])){
  $id = $_GET["Id"];
  $nom = $_GET["Nom"];
  $ape = $_GET["Ape"];
  $dir = $_GET["Dir"];
}else{
  $id = $_POST["id"];
  $nom = $_POST["nom"];
  $ape = $_POST["ape"];
  $dir = $_POST["dir"];

  $sql = "UPDATE DATOS_USUARIOS SET NOMBRE=:upNom, APELLIDO=:upApe, DIRECCION=:upDir WHERE ID=:upId";
  $resultado=$base->prepare($sql);
  $resultado->execute(array(":upId"=>$id, ":upNom"=>$nom, ":upApe"=>$ape, ":upDir"=>$dir));
  // echo "ID: $id <br>";
  // echo "Nombre: $nom <br>";
  // echo "Apellido: $ape <br>";
  // echo "Direccion: $dir <br>";
  header("location:index.php");
}


?>

<h1>ACTUALIZAR</h1>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value = "<?php echo $id?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value = "<?php echo $nom?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value = "<?php echo $ape?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value = "<?php echo $dir?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>