<?php

include("conexion.php");
$sql = "SELECT *  FROM registro_resultados";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas</title>
    <link rel="stylesheet" href="../css/estilo-resultados.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
 
</head>

<body>
   


    <div class="contenedor">

        <div class="logo-titulo">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/hif/2/25/Newcastle_United_Logo.png" width="100" height="100">

            <h1 class="titulo__letras">Resultados Generales</h1>

        </div><br><br>

        <button id="reg" class="botonReg">Registrar Datos</button><br><hr><br>

        <div class="divForm">

            <form id="formulario" action="registro.php" method="POST" class="mostrar">

                <label class="title-reg">Registrar Resultados Generales</label><br>

                <input type="number" name="temporada" id="temporada" required placeholder="Temporada">


                <input type="text" name="torneo" id="torneo" required placeholder="Torneo">


                <input type="number" name="pganados" id="pganados" required placeholder="Partidos Ganados">


                <input type="number" name="pempatados" id="pempatados" required placeholder="Partidos Empatados">


                <input type="number" name="pperdidos" id="pperdidos" required placeholder="Partidos Perdidos">


                <input type="number" name="goles" id="goles" required placeholder="Goles">


                <input type="number" name="tamarilla" id="tamarilla" required placeholder="T. Amarillas">


                <input type="number" name="troja" id="troja" required placeholder="T. Rojas">


                <input type="text" name="posicion" id="posicion" required placeholder="Posición">

                <button name="registrar" type="submit" class="btn-form">Enviar</button>

            </form>

        </div>


        <div class="tabla">
        <h1>Regístro Estadísticas Generales</h1>
            <table>
                <thead>
                    <tr>
                        <th class="columna title">Temporada</th>
                        <th class="columna title">Campeonato</th>
                        <th class="columna title">P.G</th>
                        <th class="columna title">P.E</th>
                        <th class="columna title">P.P</th>
                        <th class="columna title">Goles</th>
                        <th class="columna title">Tarjetas A.</th>
                        <th class="columna title">Tarjetas R.</th>
                        <th class="columna title">Resultado</th>

                    </tr>
                </thead>
                <tbody>
                    <?php


                    $sumPartG = 0;
                    $sumPartE = 0;
                    $sumPartP = 0;
                    $sumG = 0;
                    $sumTa = 0;
                    $sumTr = 0;

                    while ($row = mysqli_fetch_assoc($query)) {


                        $sumPartG = $sumPartG + intval($row['partidosg']);

                        $sumPartE = $sumPartE + intval($row['partidose']);

                        $sumPartP = $sumPartP + intval($row['partidosp']);

                        $sumG = $sumG + intval($row['goles']);

                        $sumTa = $sumTa + $row['tarjetasa'];

                        $sumTr = $sumTr + $row['tarjetasr'];
                    ?>
                        <tr>
                            <th class="columna campo"><?php echo $row['temporada'] ?></th>

                            <th class="columna campo"><?php echo $row['competencia'] ?></th>

                            <th class="columna campo"><?php echo $row['partidosg'] ?></th>

                            <th class="columna campo"><?php echo $row['partidose'] ?></th>

                            <th class="columna campo"><?php echo $row['partidosp'] ?></th>

                            <th class="columna campo"><?php echo $row['goles'] ?></th>

                            <th class="columna campo"><?php echo $row['tarjetasa'] ?></th>

                            <th class="columna campo"><?php echo $row['tarjetasr'] ?></th>

                            <th class="columna campo"><?php echo $row['resultado'] ?></th>


                        </tr>
                    <?php

                    }
                    ?>

                    <tr>

                        <th class="columna total">TOTAL</th>

                        <th class=""></th>

                        <th class="columna campo"> <?php echo $sumPartG; ?> </th>

                        <th class="columna campo"> <?php echo $sumPartE; ?> </th>

                        <th class="columna campo"> <?php echo $sumPartP; ?> </th>
                        <th class="columna campo"> <?php echo $sumG; ?> </th>

                        <th class="columna campo"> <?php echo $sumTa; ?> </th>
                        <th class="columna campo"> <?php echo $sumTr; ?> </th>

                        <th class=""></th>


                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>


    <script>
            let formu = document.querySelector('#formulario');
            let boton = document.querySelector('.botonReg');

            boton.addEventListener("click", function() {
                formu.classList.remove("mostrar")
            });

            boton.addEventListener("click", function() {
                boton.classList.add("ocultar")
            });

          
            
        </script>   


</body>

</html>