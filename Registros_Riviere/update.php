<?php

include("conection.php");


$temporada=$_POST['temporada'];
$partidos=$_POST['partidos'];
$goles=$_POST['goles'];
$asistencias=$_POST['asistencias'];
$tarjetaa=$_POST['tarjetaa'];
$tarjetar=$_POST['tarjetar'];
$fecha= date("Y-m-d");



$sql="UPDATE data SET temporada='$temporada' partidos='$partidos',goles='$goles',
asistencias='$asistencias',tarjetaa='$tarjetaa',tarjetar='$tarjetar', fecha_reg='$fecha'
 WHERE temporada='$temporada'";
$query=mysqli_query($con,$sql);

    if($query){
       Header("Location: player.php");
    }
?>
