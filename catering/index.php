
<?php include('plantillas/cabecera.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio de catering </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 -->
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
    <div class="contenedor-presupuesto">
   
         <div class="contenedor-info-presupuesto">
          <h1>Servicio de <span>catering expertos en dulces</span> </h1>
            <div class="contenedor-presentacion">
               <p> En TAKE A CHEF nos encargamos de realizar la organización de la mesa dulce para que tu fiesta sea todo un éxito.<br>
               El servicio incluye la presentación de nuestros productos
                  según la temática elegida por nuestro cliente con materia prima de primera calidad.<br>
                 Todo el proceso de elaboración y decoración, lo realizamos con mucho esmero y dedicación porque creemos 
                 que cada evento es unico e irrepetible.<br>
                   Tenemos años de trayectoria en diferentes eventos como cumpleaños, comuniones, bodas,etc.<br>
                  Si querés que tu fiesta sea inolvidable, estas pensando en TAKE A CHEF </p>
    

               <form action="formcatering.php"   method="POST">
                  <input type="submit" name="presupuesto" value="Pedir Presupuesto" class="btn-presupuesto">
                  </form>
            </div>
     
        </div>
    </div>
    <!--Script Js-->
  <script src="../script/index.js"></script> 
   
</body>
</html>
<?php include('plantillas/piedepagina.php');?>