<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newcastle United F.C</title>
    <link rel="stylesheet" href="css/estilo-index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
    <img class="logoN" src="https://upload.wikimedia.org/wikipedia/hif/2/25/Newcastle_United_Logo.png" width="100" height="100">
        <div class="titulos">
        <h1>Liga Máster Newcastle United F.C</h1>
        <h2>Registro de equipo y jugadores</h2>
        </div>
    <img class="logoP" src="img/PES20131.png" width="150" height="100">
        
    </header>
    
    <div class="main-equipo">
        <h3>EQUIPO</h3>
        <div class="container">
            <a href="resultados/index.php" class="caja caja1-equipo">
                <!-- Contenido de la izquierda -->
                <h3>Resultados</h3>
            </a>
           
            <a href="fichajes-new-castle/index.php" class="caja caja3-equipo">
                <!-- Contenido de la izquierda -->
                <h3>Fichajes</h3>
            </a>
            <a href="traspasos-new-castle/index.php" class="caja caja4-equipo">
                <!-- Contenido de la derecha -->
                <h3>Transferencias</h3>
            </a>

            <a href="galeria/index.php" class="caja caja2-equipo">
                <!-- Contenido de la derecha -->
                <h3>Galería</h3>
            </a>
        </div>
    </div>
    
    <div class="main-jugadores">
        <h3>JUGADORES</h3>
        <div class="container">
            <a href="registros-Dani/player.php" class="caja caja1-jugador">
                <!-- Contenido de la izquierda -->
                <h3>Daniel Rincón</h3>
            </a>
            <a href="registros-Riviere/player.php" class="caja caja2-jugador">
                <!-- Contenido de la derecha -->
                <h3>Riviere</h3>
            </a>
            <a href="otra_pagina.html" class="caja caja3-jugador">
                <!-- Contenido de la izquierda -->
                <h3>Jugador</h3>
            </a>
            <a href="otra_pagina.html" class="caja caja4-jugador">
                <!-- Contenido de la derecha -->
                <h3>Jugador</h3>
            </a>
        </div>
    </div>

    <footer>
        <p>© 2024 Liga Máster New Castle United F.C. Todos los derechos reservados.</p>
        <span>By iD-Force</span>
    </footer>
</body>




</html>
