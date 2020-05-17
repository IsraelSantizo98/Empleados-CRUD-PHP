<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <div class="header-container">
      <header>
        <h1 class="header-title">Evaluador de edad para el ingreso en la Universidad</h1>
      </header>
    </div>
    <div class="php-container">
  <?php 
    $nombrePostulante = "<h2>Isral Santizo<h2>";
    $edadPostulante = 29;
    echo " <h2>El nombre del postulante es: </h2>" .$nombrePostulante. "</br>";
    if($edadPostulante >= 18){
      echo "Bienvenido puedes entrar a la Universidad";
    }else{
      echo "<h2>No cumples con la edad correspondiente, espera un poco mas</h2>";
    }
  ?>
    </div>
  </div>
</body>
</html>