<?php
session_start();
  if(!isset($_SESSION ['usuario'])){
    header("Location:../index.php");
  }else{
    if($_SESSION['usuario']=="ok"){
      $nombre=$_SESSION['nombre'];
    }
  }


?>


<!doctype html>
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
    <link rel="stylesheet" href="../../css/style.css">
  </head>
  <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/takeachefRosarioCambios/takeachef"  ?>

    
<header>
        <!--Menu desktop-->
        <div class="menu">
            <div class="contenedor-menu">
                <div class="logo">
                <a class="nav-item nav-link" href="<?php echo $url;?>/index.html">SITIO WEB</a>
                   
                </div>
               
                <div class="menu-links">
                    <nav>
                        <ul>
                        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
                        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/registros/cad.php">Chef</a>
                        <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/registros/cat.php">Catering</a>
                        </ul>
                    </nav>
                </div>
                  <!--Btn registro-->
                  <div class="header-registro">
                    <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/cerrar.php"><input type="button" class="btn-registro-header-desktop" value=" cerrar sesion"></a></a>
                  </div>
            </div>
            
        </div>
        <!--Menu-mobile-->
        <div class="menu-mobile ">
            <div class="menu-abrir-cerrar">
                <!--Para que el logo y el icono esten centados-->
                <div class="header contenedor">
                   <!--Btn registro-->
                   <div class="header-registro">
                     <a href="./login.html"><input type="button" class="btn-registro-header" value="Iniciar sesion"></a>  
                   </div>
                    <!--logo-->
                    <a class="nav-item nav-link" href="<?php echo $url;?>/index.html">SITIO WEB</a>
                    </a>
                    <!--Icono hamburguesa-->
                    <a href="#" id="btn-open-close">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <!--Con js cerramos el menu dinamicamente-->
               <div  class="menu-mobile-closed" id="menu-mobile-links">
                <!--Fondo oscuro-->
                <div class="background-black">            
                </div>
                <nav class="menu-nav" id="menu-nav">
                    <ul>
                        <li><a href="./index.html">Inicio</a></li>
                        
                        <li><a href="./chef/index.php">Chef a domicio</a></li>
                        
                        <li><a href="./catering/index.php">Servicio de catering</a></li>
                    </ul>
                    <!--Contenedor redes-->
                    <div class="container-redes">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </nav>

               </div> 
            </div>
        </div>
</header>        
    


   
    <!-- Estilos rosario -->
  <!--   <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/registros/cat.php">Catering</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/registros/cad.php">Chef a Domicilio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/cerrar.php">Cerrar Sesion</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Sitio Web</a>
            <li><a href="./index.html">Inicio</a></li>
                            <li><a href="./receta.html">Recetas</a></li>
                            <li><a href="./chef/index.php">Chef</a></li>
                            <li><a href="./index.html">Productos</a></li>
                            <li><a href="./catering/index.php">Catering</a></li>
                            
        </div>
    </nav>
    <div class="container">
        <div class="row"> -->
    <!-- *********************** -->      
     