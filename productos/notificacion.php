<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Notificacion</title>
</head>
<body>
  <?php 
    $notificacion = $_GET['notificacion'];
    if ($notificacion == 1) {
      echo "
      <div id='contenido'>
        <div id='contenido'>
          <h1 id='exito'>Exito</h1>
          <p class='mensaje'>Se ha ingresado correctamente el producto</p>
          <a href='index.php' class='btnAceptar'>Aceptar</a>
        </div>
      </div>";
    }
    else if($notificacion ==2){
      echo "
      <div id='contenido'>
        <div id='contenido'>
          <h1 id='error'>Fallido</h1>
          <p class='mensaje'>No se ha ingresado correctamente el producto</p>
          <a href='index.php' class='btnAceptar'>Aceptar</a>
        </div>
      </div>";
    }
  ?>
</body>
</html>