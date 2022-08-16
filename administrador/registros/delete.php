<?php
include("../../conexion.php");

$id=$_GET["id"];


$sql="DELETE FROM informes where id like $id ";
$rdo=mysqli_query ($conex,$sql);
if (!$rdo){
    echo "no se elimino";
}
else{
    header("location:cad.php");
}

?>

<?php include ("../plantillas/cabecera.php");?>


