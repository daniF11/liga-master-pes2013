<?php 

include("conexion.php");

if (isset($_POST['registrar'])) {
   if (strlen($_POST['nombre']) >= 1 &&
      strlen($_POST['edad']) >= 1 &&
       strlen($_POST['pais']) >= 1 &&
        strlen($_POST['posicion']) >= 1 &&
         strlen($_POST['equipo']) >= 1 &&
          strlen($_POST['precio']) >= 1 &&
           strlen($_POST['fecha']) >= 1) {
         
             $nombre = trim($_POST["nombre"]);
             $edad= trim($_POST["edad"]);
             $pais= trim($_POST["pais"]);
             $posicion = trim($_POST["posicion"]);
             $equipo= trim($_POST["equipo"]);
             $precio= trim($_POST["precio"]);
             $fecha= trim($_POST["fecha"]);
             $fechaven_str = (string) $fecha;
             $fechareg = date("Y-m-d");
             


            $consulta= "INSERT INTO registro_ventas (nombre, edad, pais, posicion, equipo, precio, fecha_venta, fecha_reg) VALUES ('$nombre','$edad', '$pais','$posicion','$equipo', '$precio','$fechaven_str','$fechareg')";

            $resultado = mysqli_query($con,$consulta);

            if ($resultado) {
                ?>
                  <h3>Datos Cargados!</h3>
                <?php
               
            }else{
                ?>
                  <h3>ERROR!</h3>
                <?php

            }

       }
            else{
                ?>
                  <h3>Completa los campos!</h3>
                <?php

        }
}


    
?>