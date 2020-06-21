<?php 
  include 'php/conexion.php';
  session_start();
  $user_name = $_SESSION['usuario'];
  echo $user_name;
  $datos = $conexion_cv->query("SELECT * FROM usuarios WHERE usuario = '$user_name'");
  while($user = mysqli_fetch_assoc($datos)){ 
    $user['id_usuario'];
    $var_id = $user['id_usuario'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Bienvenido</h1>
  <?php 
    echo $var_id;
    while($user = mysqli_fetch_array($datos)){ 
    echo $user['id_usuario'];
    }
  ?>
</body>
</html>