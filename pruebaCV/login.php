<?php 
  include 'php/conexion.php';
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $usuario = $_POST['nombre_usuario'];
    $password = $_POST['password_usuario'];
    if($usuario != "" && $password != ""){
      $instruc_validar = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contra = '$password'";
      $query_validar  = mysqli_query($conexion_cv, $instruc_validar);
      while($r = mysqli_fetch_assoc($query_validar)){
        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $usuario;
        header('location: index.php');
      }
    }
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
  <h1>Inicio de Sesion</h1>
  <form action=" <?php $_SERVER['PHP_SELF']; ?> " method="post">
    <input type="text" name="nombre_usuario" placeholder="Nombre usuario">
    <input type="password" name="password_usuario" placeholder="Password">
    <input type="submit" value="Ingresar">
  </form>
</body>
</html>