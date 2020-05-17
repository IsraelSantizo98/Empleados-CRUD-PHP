<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $saldoTarjeta = 1000;
    $precioProducto = 500; 
    $cambio;
    echo "Tu saldo es: " .$saldoTarjeta. "</br>";
    echo "El valor del producto es: " .$precioProducto. "</br>";

    if ($saldoTarjeta > $precioProducto){
      echo "Gracias por tu compra";
      $cambio = $saldoTarjeta - $precioProducto;
      echo "El cambio es de: " .$cambio. "<br>";
    }else{
      echo "Lo sentimos, no tienes suficiente saldo para pagar";
    }
  ?>
</body>
</html>