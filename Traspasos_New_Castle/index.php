<?php

include("conexion.php");
$sql = "SELECT *  FROM registro_ventas";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="center">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Newcastle_United_Logo.svg/640px-Newcastle_United_Logo.svg.png" width="130" height="100">
<div class="titulos">
    <h2>Registro de Ventas</h2>
    <h1>New Castle F.C</h1>
</div>
    </div>
         <br><br>
    <button class="botonReg">Registrar Datos</button><br>
        <hr><br>

   <form id="formulario" action="registrar.php" method="POST" class="mostrar">

    <div id="comprasForm" class="formulario">
        <label for="nombre">Nombre de Jugador:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>

        <label for="pais">País:</label>
        <input type="text" name="pais" id="pais" required>

        <label for="posicion">Posición:</label>
        <input type="text" name="posicion" id="posicion" required>

        <label for="equipo">Equipo:</label>
        <input type="text" name="equipo" id="equipo" required>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" required>

        <label for="fecha">Fecha (Formato: DD-MM-AA):</label>
        <input type="date" name="fecha" id="fecha" required>
    </div>

    

    <button name="registrar" type="submit">Enviar</button>
</form>

<br><br>

    <h1 class="title-reg">Regístro Jugadores Vendidos</h1>
    <div class="contenedor-registros">


        <table class="tabla tabla-datos div">

            <tr>
                <th class="columna title">Nombre</th>
                <th class="columna title">Edad</th>
                <th class="columna title">Nacionalidad</th>
                <th class="columna title">Posición</th>
                <th class="columna title">Equipo</th>
                <th class="columna title">Precio</th>
                <th class="columna title">Fecha</th>

                <th></th>
                <th></th>

            </tr>


            <tbody>
                <?php


                $sumPrecio = 0;

                while ($row = mysqli_fetch_assoc($query)) {


                    $sumPrecio = $sumPrecio + intval($row['precio']);
                    $posicion =$row['posicion'];
                    $color='';


                    switch ($posicion) {
                        case 'PT':
                            $color = 'yellow';
                            break;

                        case 'D-C':
                            $color = 'blue';
                            break;
                        case 'LIB':
                            $color = 'blue';
                            break;
                        case 'LD':
                            $color = 'blue';
                            break;
                        case 'LI':
                            $color = 'blue';
                            break;

                        case 'MC':
                            $color = 'green';
                            break;
                        case 'MCD':
                            $color = 'green';
                            break;
                        case 'ID':
                            $color = 'green';
                            break;
                        case 'II':
                            $color = 'green';
                            break;
                        case 'MP':
                            $color = 'green';
                            break;

                        case 'DC':
                            $color = 'red';
                            break;
                        case 'ED':
                            $color = 'red';
                            break;
                        case 'EI':
                            $color = 'red';
                            break;
                        case 'SP':
                            $color = 'red';
                            break;
                        default:
                            $color = '';
                    }
                  
                       
                ?>
                    <tr>
                        <th class="columna campo"><?php echo $row['nombre'] ?></th>
                        <th class="columna campo"><?php echo $row['edad'] ?></th>
                        <th class="columna campo"><?php echo $row['pais'] ?></th>
                        <th class="columna campo" style="color: <?php echo $color; ?>"><?php echo $row['posicion'] ?></th>
                        <th class="columna campo"><?php echo $row['equipo'] ?></th>
                        <th class="columna campo"><span style="color: green;">€</span><?php echo $row['precio'] ?></th>
                        <th class="columna campo"><?php echo $row['fecha_venta'] ?></th>


                    </tr>
                                 
                    
                <?php

                }
                ?>

                <?php 
                
                ?>

                <tr>

                    <th class="columna total">TOTAL</th>
                    <th class=""> </th>

                    <th class=""> </th>
                    <th class=""> </th>

                    <th class=""> </th>
                    <th class="columna campo"> <span style="color: green;">€</span><?php echo $sumPrecio; ?> </th>

                    <th class=""> </th>




                </tr>


            </tbody>
        </table>


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
    
</body>
</html>