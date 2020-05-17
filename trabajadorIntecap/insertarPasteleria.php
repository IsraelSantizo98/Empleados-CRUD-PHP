<?php 
  include 'php/conexion.php';//para insertar ficheros
  $tipoPastel = $_POST['tipoPastel'];
  $sabor = $_POST['sabor'];
  $tamanio = $_POST['tamanio'];
  $numeroPorciones = $_POST['numeroPorciones'];
  $tipoIngredientes = $_POST['tipoIngredientes'];

  //codigo para insertar valores o datos la BD
  $instruc3 = "INSERT INTO pasteleria VALUES ('$tipoPastel', '$sabor', '$tamanio', '$numeroPorciones', '$tipoIngredientes')"; 
  //Codigo para que envie los datos a la BD
  mysqli_query($pasteleriaConexion, $instruc3);
?>