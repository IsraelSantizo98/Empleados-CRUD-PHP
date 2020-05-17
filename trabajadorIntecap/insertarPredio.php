<?php 
  include 'php/conexion.php';//para insertar ficheros
  $modelo = $_POST['modelo'];
  $serie = $_POST['serie'];
  $color = $_POST['color'];
  $km = $_POST['km'];
  $placa = $_POST['placa'];
  $fabricacion = $_POST['fabricacion'];
  $Rodado = $_POST['Rodado'];


  //codigo para insertar valores o datos la BD
  $instruc4 = "INSERT INTO predio VALUES ('$modelo', '$serie', '$color', '$km', '$placa', '$fabricacion', '$Rodado')"; 
  //Codigo para que envie los datos a la BD
  mysqli_query($predioConexion, $instruc4);
?>