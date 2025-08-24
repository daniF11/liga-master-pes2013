<?php 

include("conexion.php");

if (isset($_POST['registrar'])) {
   if (strlen($_POST['temporada']) >= 1 &&
      strlen($_POST['torneo']) >= 1 &&
       strlen($_POST['pganados']) >= 1 &&
        strlen($_POST['pempatados']) >= 1 &&
         strlen($_POST['pperdidos']) >= 1 &&
          strlen($_POST['goles']) >= 1 &&
           strlen($_POST['tamarilla']) >= 1 &&
            strlen($_POST['troja']) >= 1 &&
             strlen($_POST['posicion']) >= 1) {
         
             $temporada = trim($_POST["temporada"]);
             $torneo= trim($_POST["torneo"]);
             $pganados= trim($_POST["pganados"]);
             $pempatados = trim($_POST["pempatados"]);
             $pperdidos= trim($_POST["pperdidos"]);
             $goles= trim($_POST["goles"]);
             $tamarilla= trim($_POST["tamarilla"]);
             $troja= trim($_POST["troja"]); 
             $posicion= trim($_POST["posicion"]);              
             $fechareg = date("Y-m-d");
             


            $consulta= "INSERT INTO registro_resultados (temporada, competencia, partidosg, partidose, partidosp, goles, tarjetasa, tarjetasr, resultado, fecha_reg) VALUES ('$temporada','$torneo', '$pganados','$pempatados','$pperdidos', '$goles','$tamarilla','$troja', '$posicion', '$fechareg')";

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