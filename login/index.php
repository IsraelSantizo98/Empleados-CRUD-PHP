<?php 
  include 'php/conexion.php';
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $usuario = $_POST['usuario'];
    $password = $_POST['contra'];
    if($usuario != "" && $password!=""){
      $instruc1 = "SELECT * FROM usuario WHERE usuario = '$usuario' and contra = '$password'";
      $query = mysqli_query( $usuario_Conex, $instruc1);
      while($r = mysqli_fetch_assoc($query)){
        //$_SESSION es una super variable que se activa con el session_start(); y loggedin es booleano
        $_SESSION['loggedin'] = true;
        $_SESSION['usuario'] = $usuario;
        //INICIO DE SESION CON NOBRE DEL USUARIO, 
        // $_SESSION['contra'] = $contra;
        header('location: principal.php');
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/login.css">
  <title>Login CV</title>
</head>
<body>
  <div class="container">
    <h2 class="loginTitle">Login Usuario</h2>
  <!-- EN EL ACTION ES UN METODO PARA VALIDAR QUE SI ESTE EL USUARIO, IMPORTANTE TODOS LOS CAMPOS NAME DEDEN SER IGUALES QUE LAS VARIABLES EN SESSION_START » $_POST['USUARIO'] Y $_POST['CONTRA'] -->
  <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
  <input class="inputName" type="text" name="usuario" placeholder="Usuario"><br>
  <input class="inputPassword" type="password" name="contra" placeholder="Contraseña"><br>
  <input class="inputSubmit" type="submit" value="Iniciar Sesion">
  </form>
  </div>
</body>
</html>
