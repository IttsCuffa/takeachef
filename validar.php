<?php
include("conexion.php");
$username=$_POST['username'];
$password=$_POST['password'];

$consulta="SELECT * FROM usuarios WHERE Usuario='$username' and Contraseña='$password'";
$resultado=mysqli_query($conex, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas) {
    header("location:index.html");
}
else {
    echo "Error. Datos Incorrectos.";
    echo "Por favor, intente de nuevo";
}
?>