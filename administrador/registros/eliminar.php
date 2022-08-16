<?php
include("../../conexion.php");

$id=$_GET["id"];

$sql="DELETE FROM consultas where id like $id ";
$rdo=mysqli_query ($conex,$sql);
if (!$rdo){
    echo "no se eliminó";
}
else {
    header("Location:cat.php");
}

?>

<?php include ("../plantillas/cabecera.php");?>























