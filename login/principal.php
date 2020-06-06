<?php 
  //Para la seguridad de la pagina para que no cuando no este logeado y tenga la ruta de acceso no pueda ingresar
  session_start();
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

  }else{
    header('location: index.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvendio</title>
</head>
<body>
  <h1>Hola</h1>
  <a href="cerrarSesion.php">Cerrar Sesion</a>
</body>
</html>