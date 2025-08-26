<?php


  $con=mysqli_connect("localhost","root","", "db_riviere_records");

   if ($con){
     /* ?>
          <b style="color:#2e2929  "><h2>Conectado a Base de Datos</h2></b>
      <?php*/
   }else{
  ?>
          <h2>error</h2>
      <?php
   }


?>
