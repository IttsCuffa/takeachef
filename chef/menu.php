<?php include('plantillas/cabecera.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--Hoja de estilo-->
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main class="contenedor">
        <h1 class="menu-chef">Menu:</h1>
        <h2 class="h2-menu">Te presentamos algunas opciones para agasajar a tus invitados. Son sólo orientativos, ya que podemos armar un menú especial según tus preferencias.
        </h2>
        <div class="container-menu-chef">
        
            <div class="img-chef">
             <img src="./img/foto3.jpg" alt="foto-chef" >
            </div>
            <div class="datos-chef">
               <h2 > Opción 1:</h2>
                <h3 id="h3">  Entrada:</h3>
                <p> Saquitos de puerro, calabaza y mozarella con aceite de oliva. </p>
                <h3 id="h3">Principal</h3>
                  <p>Lomo de merluza con jamón serrano y parmentier de limón.</p> 
                 <h3 id="h3">Postre</h3>
                  <p>Tarta tatín con helado de vainilla</p>    
           
            </div>
           
       </div>
        <div class="container-menu-chef">
            
         <div class="datos-chef">
         <h2 class="h2">Opción 2:</h2>
         <h3 id="h3">  Entrada:</h3>
          <p>Lasaña de berenjenas y queso feta con tomates cherry y cebollita crujiente.</p>
         <h3 id="h3">Principal</h3>
         <p>Saltim bocca de pollo con manzana y frutos secos.</p>
         <h3 id="h3">Postre</h3>
         
          <p> Naranjitas caramelizadas con chocolate.</p> 
       
         
        </div>
        <div class="img-chef">
            <img src="./img/menu-chef.jpg" alt="foto-chef">
        </div>
         
        </div>
       <div class="container-menu-chef">
        <div class="img-chef">
            <img src="./img/menu-chef.jpg" alt="foto-chef">
        </div>
        <div class="datos-chef">
            
           <h2 id="h2">Opcion 3</h2>
            <h3 id="h3">  Entrada:</h3>
            <p>Brochetas de ensalada caprese</p>
         <p> Tostaditas crujientes de salmón con mostaza.</p>
        <h3 id="h3">Principal</h3>
        <p> Degustación de carnes asadas acompañadas de diferentes guarniciones.</p>
      <h3 id="h3">Postre</h3>
          
          <p> Brownie con helado de americana</p> 
          
       
        </div>
      
       </div>
    
    
    
       
       
    </main>
   
   <!--Script Js-->
   <script src="../script/index.js"></script>  
</body>
</html>

<?php include('plantillas/piedepagina.php');?>