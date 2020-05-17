<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validar Nota</title>
</head>
<body>
  <header>
    <h1>Validar nota del Estudiante</h1>
  </header>
  <?php 
    $nota = 59;
    if($nota>60){
      echo "Ganaste el año, con la nota de: ".$nota;
    }else{
      echo "Lo sentimos, perdiste el año con la nota de: ".$nota;
    }
  ?>
</body>
</html>