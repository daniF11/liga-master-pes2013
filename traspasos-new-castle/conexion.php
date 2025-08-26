<?php


  $con=mysqli_connect("localhost","root","", "fichajes_db");

   if ($con){
     ?>
          <b style="color:#FFFF  "><label>Conectado a Base de Datos</label></b>

          
      <?php
   }else{
  ?>
          <h2>error</h2>
      <?php
   }


?>
