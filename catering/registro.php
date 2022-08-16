


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php 

include ('./../conexion.php');

$id=$_POST['id'];

$fecha=$_POST['fecha'];

$nombre=$_POST['nombre'];

$telefono=$_POST['telefono'];

$email=$_POST['email'];

$consulta=$_POST['consulta'];


$insertar="INSERT INTO consultas (id,fecha, nombre,telefono,email,consulta) VALUES ('$id','$fecha','$nombre','$telefono','$email','$consulta')";
$resultado=mysqli_query($conex,$insertar);
  
mysqli_close($conex);
  
?>
<form action="index.php" method="POST">
<input type="submit" value="Volver">
</form>
<form action="../administrador/registros/cat.php" method="POST"></form>
</body>
</html>
         

       
     
