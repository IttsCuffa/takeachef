<?php
include("conexion.php");
if (isset($_POST['registrar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['username']) >= 1 && strlen($_POST['password']) >= 1){
	    $name = trim($_POST['name']);
	    $correo = trim($_POST['correo']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
	    $consulta = "INSERT INTO usuarios (Nombre, Email, Usuario, Contraseña) VALUES ('$name', '$correo', '$username', '$password')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
		   //Mensaje de error en caso de que falle la conexión con la BD
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error! Dirección de correo o usuario no disponible</h3>
            <h3> Por favor, intentelo de nuevo</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>