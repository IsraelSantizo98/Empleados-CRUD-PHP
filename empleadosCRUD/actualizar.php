<!-- mismas variables que colocamos antes de la etiqueta a de actualizar-->
<?php
$empleados=$_GET['empleados']; 
$dpi=$_GET['dpi'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$fechaNacimiento = $_GET['fechaNacimiento'];
$estadoVCivil = $_GET['estadoVCivil'];
$hijos = $_GET['hijos'];
$experienciaLaboral = $_GET['experienciaLaboral'];
$fechaIngreso = $_GET['fechaIngreso'];
$fechaFin = $_GET['fechaFin'];
$foto = $_GET['foto'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Formulario de actualizacion</h1>
  <form action="modifica.php" method="POST">
  <label for="">DPI
  <input type="text" name="dpi" value="<?php echo $dpi?>">
  </label>
  <label for="">Nombre
  <input type="text" name="nombre" value="<?php echo $nombre?>">
  </label>
  <label for="">Apellido
  <input type="text" name="apellido" value="<?php echo $apellido ?>">
  </label>
  <label for="">Fecha Nacimiento
  <input type="date" name="fechaNacimiento" value="<?php echo $fechaNacimiento ?>">
  </label>
  <label for="">Estado Civil
  <input type="text" name="estadoVCivil" value="<?php echo $estadoVCivil?>">
  </label>
  <label for="">Hijos
  <input type="text" name="hijos" value="<?php echo $hijos?>">
  </label>
  <label for="">Experiencia Laboral
  <input type="text" name="experienciaLaboral" value="<?php echo $experienciaLaboral?>">
  </label>
  <label for="">Fecha Ingreso
  <input type="date" name="fechaIngreso" value="<?php echo $fechaIngreso?>">
  </label>
  <label for="">Fecha Retiro
  <input type="date" name="fechaFin" value="<?php echo $fechaFin?>">
  </label>
  <label for="">Foto
  <input type="text" name="foto" value="<?php echo $foto?>">
  </label>
  <input type="hidden" name="codEmpleado" value="<?php echo $empleados?>">
  <input type="submit" value="Actualizar">
  </form>
</body>
</html>