<?php

include("conexion.php");


$temporada=$_GET['id'];

$sql="DELETE FROM datos  WHERE temporada='$temporada'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: player.php");
    }
?>
