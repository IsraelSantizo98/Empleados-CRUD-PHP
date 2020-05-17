<?php 
  include 'php/conexion.php';//para insertar ficheros
  $nombreTrabajador = $_POST['nombreTrabajador'];
  $apellidoTrabajador = $_POST['apellidoTrabajador'];
  $fechaNacimiento = $_POST['fechaNacimiento'];
  $civil = $_POST['civil'];
  $sexo = $_POST['sexo'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $dpi = $_POST['dpi'];
  $foto = $_POST['foto'];

  //codigo para insertar valores o datos la BD
  $instruc1 = "INSERT INTO trabajadores VALUES ('$nombreTrabajador', '$apellidoTrabajador', '$fechaNacimiento', '$civil', '$sexo', '$direccion', '$telefono', '$dpi', '$foto')"; 
  //Codigo para que envie los datos a la BD
  mysqli_query($trabajadorConexion, $instruc1);
?>