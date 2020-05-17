<?php 
  include 'php/conexion.php';//para insertar ficheros
  $nombreTrabajador = $_POST['nombreTrabajador'];
  $apellidoTrabajador = $_POST['apellidoTrabajador'];
  $certificadoEstudio = $_POST['certificadoEstudio'];
  $sexo = $_POST['sexo'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $dpi = $_POST['dpi'];

  //codigo para insertar valores o datos la BD
  $instruc2 = "INSERT INTO estudiante VALUES ('$nombreTrabajador', '$apellidoTrabajador', '$certificadoEstudio', '$sexo', '$direccion', '$telefono', '$dpi')"; 
  //Codigo para que envie los datos a la BD
  mysqli_query($estudianteConexion, $instruc2);
?>