<?php
session_start();
if ($_POST){
   if(($_POST['usuario']=="takeachef")&&($_POST['contrasena']=="1234")){
      $_SESSION['usuario']="ok";
      $_SESSION['nombre']="takeachef";
      header ('Location:./administrador/inicio.php');
}else{ $mens="El usuario y/o contraseña son incorrectos";
}
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Take a Chef</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
<div class="container-login">
  <div class="login-box">
    <div class="avatar">
      <img src="img/logo-sinBg.png"  alt="Avatar Image">
    </div>
    
    <h1>Administrador Take a Chef</h1>
    <h1>Ingrese Aquí</h1>
    <?php if (isset($mens))
           echo $mens;?>
    <form method="POST">       
    
      <!-- Usuario -->
      <label for="correo">Usuario</label>
      <input type="text" required placeholder="Enter User" name="usuario" id="usuario">
      <!-- Contraseña -->
      <label for="password">Password</label>
      <input type="password" required placeholder="Enter Password" name="contrasena" id="contrasena" >
      <input type="submit" value="Log In">
    </form>
  </div>
</div>
 
  </body>
</html>