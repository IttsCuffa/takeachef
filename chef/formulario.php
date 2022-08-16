<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#07404B">
    <title>Take a chef</title>
    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <!--Hoja de estilo-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include('plantillas/cabecera.php'); ?>
    <form action="registro.php" method="POST" class="form">
        <h1>Completar los<span>siguientes datos</span> </h1>

        <div class="form-seccion">
        
        <input type="hidden" name="id" class="input-form" placeholder="ID">
        </div>
      <div class="form-seccion">
      
        <input type="date" name="fecha" class="input-form">
      </div>
       <div class="form-seccion">
       
        <input placeholder="Nombre"  type="text" name="nombre"class="input-form" required>
       </div>
       <div class="form-seccion">
      
        <input placeholder="Telefono" type="tel" name="telefono" class="input-form" required>
       </div>
      <div class="form-seccion">
      
        <input placeholder="Email" type="email" name="email" class="input-form">
      </div>
       <div class="form-seccion consulta">
       <label>Consulta:</label>
        <textarea  class="textarea" name="consulta" rows="10" cols="50"></textarea>
       </div>
      
        <input type="submit" value="Enviar" class="btn-chef">
        <input type="reset" value="Borrar" class="btn-chef">
    </form>
    <!--Script Js-->
  <script src="../script/index.js"></script>  
</body>
</html>
<?php include('plantillas/piedepagina.php');?>