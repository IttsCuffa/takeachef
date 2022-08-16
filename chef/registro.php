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

include("./../conexion.php");

$id=$_POST['id'];

$fecha=$_POST['fecha'];

$nombre=$_POST['nombre'];

$telefono=$_POST['telefono'];

$email=$_POST['email'];

$consulta=$_POST['consulta'];


$insertar="INSERT INTO informes (id,fecha, nombre,telefono,email,consulta) VALUES ('$id','$fecha','$nombre','$telefono','$email','$consulta')";
$resultado=mysqli_query($conex,$insertar);
  

mysqli_close($conex);
  
?>
<form action="index.php" method="POST">
<input type="submit" value="Volver">
</form>
<form action="../administrador/registros/cad.php" method="POST"></form>
</body>
</html>
         