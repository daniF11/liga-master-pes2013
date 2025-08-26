<?php
include("conexion.php");


$id=$_GET['id'];

$sql="SELECT * FROM datos WHERE temporada='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/estilo-dani.css">

  <title>Actualizar</title>


</head>
<body>



  <div class="contenedor-formulario">
    <h1 class="title-act">Actualizar Datos</h1>
    <form action="update.php" method="POST" class="formulario">



      <label>Temporada</label>              <input type="text" class="cajas" name="temporada" placeholder="" value="<?php echo $row['temporada']  ?>">
      <label>Partidos</label>            <input type="text" class="cajas" name="partidos" placeholder="" value="<?php echo $row['partidos']  ?>">
      <label>Goles</label>          <input type="text" class="cajas" name="goles" placeholder="" value="<?php echo $row['goles']  ?>">
      <label>Asistencias</label>          <input type="text" class="cajas" name="asistencias" placeholder="" value="<?php echo $row['asistencias']  ?>">
      <label>Amarillas</label>          <input type="text" class="cajas" name="tarjetaa" placeholder="" value="<?php echo $row['tarjetaa']  ?>">
      <label>Rojas</label><input type="text" class="cajas" name="tarjetar" placeholder="" value="<?php echo $row['tarjetar']  ?>">

      <input type="submit" class="btn-act" value="Actualizar">
    </form>

  </div>
</body>
</html>
