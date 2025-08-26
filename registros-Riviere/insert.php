<?php



include("conection.php");



$temporada=$_POST['temporada'];
$partidos=$_POST['partidos'];
$goles=$_POST['goles'];
$asistencias=$_POST['asistencias'];
$tarjetaa=$_POST['tarjetaa'];
$tarjetar=$_POST['tarjetar'];
$fechareg = date("y/m/d");



  $sql = "INSERT INTO `data` (`temporada`, `partidos`, `goles`, `asistencias`, `tarjetaa`, `tarjetar`, `fecha_reg`) VALUES ('$temporada', '$partidos', '$goles', '$asistencias', '$tarjetaa', '$tarjetar', '$fechareg')";



$query= mysqli_query($con,$sql);

if($query){
 
    Header("Location: player.php");        

}else {
 
}
?>
