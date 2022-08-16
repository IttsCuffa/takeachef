
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
    <?php $url="http://".$_SERVER['HTTP_HOST']."/takeachef"  ?>

        <!--Menu desktop-->
        <div class="menu">
            <div class="contenedor-menu">
                <div class="logo">
                    <a href="#"> <img src="../catering/imagenes/logo-sinbg-horizontal.png" alt="logo-marca"></a>
                   
                </div>
               
                <div class="menu-links">
                    <nav>
                        <ul>
                            <li><a href="../index.html">Inicio</a></li>
                            <li><a href="../receta.html">Recetas</a></li>
                            <li><a href="../chef/index.php">Chef</a></li>
                            <li><a href="../index.html#productos">Productos</a></li>
                            <li><a href="../catering/index.php">Catering</a></li>
                            
                        </ul>
                    </nav>
                </div>
                  <!--Btn registro-->
                  <div class="header-registro">
                    <a href="../login.html"><input type="button" class="btn-registro-header-desktop" value="Iniciar sesion"></a>  
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
                    <a href="#" class="logo">
                        <img src="../catering/imagenes/logo-chef-sin-BG2.png" alt="logo-mobile">
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
                    <li><a href="../index.html">Inicio</a></li>
                            <li><a href="../receta.html">Recetas</a></li>
                            <li><a href="../chef/index.php">Chef</a></li>
                            <li><a href="../index.html#productos">Productos</a></li>
                            <li><a href="../catering/index.php">Catering</a></li>
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