<?php 
  include 'php/conexion.php';
  //se coloca entre corchetes el nombre de la tabla
  $codigo = $_GET['empleados'];
  $instruc = "DELETE FROM empleado WHERE codEmpleado = $codigo";
  //$empleadosConexcion se encuentra declarado en el archivo conexion.php
  mysqli_query($empleadosConexcion, $instruc);
?>