<?php include ("./../plantillas/cabecera.php");?>


<?php include("../../conexion.php");?>

<body>

<div>
<table border="1">
    

        <tr>
            <th>id:</th>
            <th>Fecha:</th>
            <th>Nombre:</th>
            <th>Telefono:</th>
            <th>Email:</th>
            <th>Consulta:</th>
            <th></th>
        </tr> 
          
       
       <?php

       
       $sql= "SELECT * FROM consultas";
       $rdo=mysqli_query($conex,$sql);
       while ($mostrar=mysqli_fetch_row($rdo)){
       ?>
       <tr>
        <td><?php echo $mostrar ['0']?></td>
        <td><?php echo $mostrar ['1']?></td>
        <td><?php echo $mostrar ['2']?></td>
        <td><?php echo $mostrar ['3']?></td>
        <td><?php echo $mostrar ['4']?></td>
        <td><?php echo $mostrar ['5']?></td>
        <td>
            <a href="eliminar.php? id=<?php echo $mostrar ['0']?>">Eliminar</a>
       </td>   
       </tr>
       <?php
       }
       ?>
     
 </table>
</div>
</body>