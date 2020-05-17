<?php 
  include 'php/conexion.php';
  // include 'eliminar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
<body>
  <h1>Colaboradores Intecap</h1>
  <table>
  <!-- tr fila -->
    <tr>
      <th>Cod. Empleado</th>
      <th>DPI</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Fecha Nacimiento</th>
      <th>Estado Civil</th>
      <th>Hijos</th>
      <th>Experiencia Laboral</th>
      <th>Fecha Ingreso</th>
      <th>Fecha Retiro</th>
      <th>Foto</th>
    </tr>
  <?php
    $instruc = "SELECT * FROM empleado";
    $query = mysqli_query($empleadosConexcion, $instruc);
    // echo "Codigo Empleados <br>";
    while($f = mysqli_fetch_assoc($query)){
      echo "<tr><td>".$f['codEmpleado']."</td><td>".$f['dpi']."</td><td>".$f['nombre']."</td><td>".$f['apellido']."</td><td>".$f['fechaNacimiento']."</td><td>".$f['estadoVCivil']."</td><td>".$f['hijos']."</td><td>".$f['experienciaLaboral']."</td><td>".$f['fechaIngreso']."</td><td>".$f['fechaFin']."</td><td>".$f['foto']."</td><td><a href='eliminar.php?empleados=".$f['codEmpleado']."'>Aceptar</a></td></tr>";
      
    }
  ?>
  <th>Eliminar</th>
  <th>Actualizar</th>
</table>
</body>
</html>