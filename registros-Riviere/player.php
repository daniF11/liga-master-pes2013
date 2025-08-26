<?php
include("conection.php");

$sql = "SELECT *  FROM data";
$query = mysqli_query($con, $sql);

$sql2 = "SELECT *  FROM info";
$query2 = mysqli_query($con, $sql2);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Registro Datos</title>
    <meta charset="UTF-8">
    <link href="../css/estilo-riviere.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

</head>

<body>



    <div class="contenedor">

        <div class="contenedor-foto">

            <div class="logo-nombre">
                <img class="logo" src="https://upload.wikimedia.org/wikipedia/hif/2/25/Newcastle_United_Logo.png" width="100" height="100">

                <h1 class="nombre__letras">Riviere</h1>

            </div>
            <div class="foto-datos">
                <img class="foto" src="img/photo.png" width="200" height="220">

              
                <?php while ($row = mysqli_fetch_assoc($query2)) { ?>

                <table class="datos">
                    <tr>
                        <td><b class="item">Club:</b></td>
                        <td><b class="datos-publicaciones"><?php echo $row['club']?></b></td>
                    </tr>
                    <tr>
                        <td><b class="item"> Dorsal:</b></td>
                        <td><b class="datos-publicaciones"><?php echo $row['dorsal']?></b></td>
                    </tr>
                    <tr>
                        <td><b class="item">Altura:</b></td>
                        <td><b class="datos-publicaciones"><?php echo $row['altura']?> cm</b></td>
                    </tr>
                    <tr>
                        <td><b class="item">Posición:</b></td>
                        <td><b class="datos-publicaciones"><?php echo $row['posicion']?></b></td>
                    </tr>

                    <tr>
                        <td><b class="item">Edad:</b></td>
                        <td><b class="datos-publicaciones"><?php echo $row['edad']?></b></td>
                    </tr>
                    <tr>
                        <td><b class="item">Nacionalidad:</b></td>
                        <td><b class="datos-publicaciones"><?php echo $row['nacionalidad']?></b></td>
                    </tr>
                </table>
              <?php  } ?>
            </div>
        </div>


        <div class="contenedor-formulario">


            <h1>Ingreso de Datos</h1>

            <form action="insert.php" class="formulario" method="POST">
                <label>Temporada</label>
                <input type="text" class="cajas" name="temporada" placeholder="">
                <label>Partidos</label>
                <input type="text" class="cajas" name="partidos" placeholder="">
                <label>Goles</label>
                <input type="text" class="cajas" name="goles" placeholder="">
                <label>Asistencias</label>
                <input type="text" class="cajas" name="asistencias" placeholder="">
                <label>T.Amarilla</label>
                <input type="text" class="cajas" name="tarjetaa" placeholder="">
                <label>T.Roja</label>
                <input type="text" class="cajas" name="tarjetar" placeholder="">

                <br>

                <input type="submit" class="btn-primary" value="Guardar">
            </form>

        </div>


        <div class="contenedor-registros">
            <h1>Regístros</h1>



            <table class="tabla tabla-datos div">

                <tr>
                    <th class="columna title">Temporada</th>
                    <th class="columna title">Partidos</th>
                    <th class="columna title">Goles</th>
                    <th class="columna title">Asistencias</th>
                    <th class="columna title">T.A</th>
                    <th class="columna title">T.R</th>

                    <th></th>
                    <th></th>
                </tr>


                <tbody>
                    <?php


                    $sumPart = 0;
                    $sumG = 0;
                    $sumAsist = 0;
                    $sumTa = 0;
                    $sumTr = 0;

                    while ($row = mysqli_fetch_assoc($query)) {


                        $sumPart = $sumPart + intval($row['partidos']);

                        $sumG = $sumG + intval($row['goles']);

                        $sumAsist = $sumAsist + intval($row['asistencias']);
                        $sumTa = $sumTa + $row['tarjetaa'];
                        $sumTr = $sumTr + $row['tarjetar'];
                    ?>
                        <tr>
                            <th class="columna campo"><?php echo $row['temporada'] ?></th>
                            <th class="columna campo"><?php echo $row['partidos'] ?></th>
                            <th class="columna campo"><?php echo $row['goles'] ?></th>
                            <th class="columna campo"><?php echo $row['asistencias'] ?></th>
                            <th class="columna campo"><?php echo $row['tarjetaa'] ?></th>
                            <th class="columna campo"><?php echo $row['tarjetar'] ?></th>

                            <th class=""><a class="link act" href="modify.php?id=<?php echo $row['temporada'] ?>">Editar</a></th>
                            <th class=""><a class="link borr" href="delete.php?id=<?php echo $row['temporada'] ?>">Eliminar</a></th>
                        </tr>
                    <?php

                    }
                    ?>

                    <tr>

                        <th class="columna title">TOTAL</th>
                        <th class="columna campo total "> <?php echo $sumPart; ?> </th>

                        <th class="columna campo total"> <?php echo $sumG; ?> </th>
                        <th class="columna campo total"> <?php echo $sumAsist; ?> </th>

                        <th class="columna campo total"> <?php echo $sumTa; ?> </th>
                        <th class="columna campo total"> <?php echo $sumTr; ?> </th>


                    </tr>


                </tbody>
            </table>


        </div>
    </div>


    <footer class="footer">
        <p class="p">Daniel F. Rincón - © 2023 - Todos los derechos reservados</p>
        <div class="redes-sociales">
            <a href="https://vandal.elespanol.com/analisis/ps3/pro-evolution-soccer-2013/15432#p-41e" target="_blank">
                Pro Evolution Soccer 2013
            </a>
        </div>
        <div class="pagina-web">
            <a href="https://as.com/meristation/2012/10/01/guia_pagina/1349086752_108704.html" target="_blank">www.serunaleyenda.com</a>
        </div>
    </footer>


</body>

</html>