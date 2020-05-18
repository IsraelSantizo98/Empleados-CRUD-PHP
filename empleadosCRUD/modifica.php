<?php 
include 'php/conexion.php';
$dpi =$_POST['dpi'];
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$fechaNacimiento =$_POST['fechaNacimiento'];
$estadoVCivil =$_POST['estadoVCivil'];
$hijos =$_POST['hijos'];
$experienciaLaboral =$_POST['experienciaLaboral'];
$fechaIngreso =$_POST['fechaIngreso'];
$fechaFin =$_POST['fechaFin'];
$foto =$_POST['foto'];
$codEmpleado =$_POST['codEmpleado'];

$instruc = "UPDATE empleado SET dpi='$dpi',nombre='$nombre', apellido='$apellido', fechaNacimiento='$fechaNacimiento', estadoVCivil='$estadoVCivil', hijos='$hijos', experienciaLaboral='$experienciaLaboral', fechaIngreso='$fechaIngreso', fechaFin='$fechaFin', foto='$foto' WHERE codEmpleado = $codEmpleado";

mysqli_query($empleadosConexcion, $instruc);
?>