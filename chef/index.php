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
<body>

   <div class="contenedor-chef">
   
    <div class="contenedor-info-chef">
        <h1>Chef a<span>Domicilio</span></h1> 
        <div class="contenedor-presentacion">
          <p>Te ofrecemos disfrutar un servicio gastronómico en la comodidad de tu casa.
             Transformá tu evento en una experiencia única, donde un chef y su equipo, concurrirá
             a tu domicilio, cocinará en tu hogar y servirá el menú paso a paso.
              Si te gusta innovar y brillar en cada evento que organizas, y queres una atención profesional, 
             no dudes en contactarnos. Nosostros a la brevedad nos comunicaremos con vos.
                 Nos encargaremos de todos los detalles para que vos  disfrutes de esta experiencia única 
               que sólo TAKE A CHEF puede ofrecerte.</p>
               <div class="contenedor-btn">
                 <form action="formulario.php"   method="POST">
                 <input  class="btn-chef"type="submit" name="presupuesto" value="Pedir Presupuesto">
                  </form>
                  <a href="./menu.php"><input  class="btn-chef"type="button" name="ver-menu-chef" value="Ver menu"></a>
                  
               </div>
          
          </div>
   
    </div>
        
   </div>
  
  <!--Script Js-->
  <script src="../script/index.js"></script> 
</body>
</html>

<?php include('plantillas/piedepagina.php');?>