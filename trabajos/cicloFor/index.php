<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Ciclo For</title>
</head>
<body>
  <div class="wrapper">
  <header>
    <h1 class="header-title">Tabla del 5</h1>
  </header>
  <div class="table">
  <?php 
  $num1 = 5;
  $result;
    for ($i=0; $i < 11; $i++) { 
      $result = $num1 * $i;
      echo "» La tabla del 5 * ".$i." es: " .$result."<br>"; 
    }
  ?>
  </div>
  </div>
</body>
</html>