<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $var = 4;
    $result;
    echo "El numero ingresado es: ".$var."</br>";
    if($var<=4){
      for($i=0; $i<11; $i++){
        $result = $var * $i;
        echo " $i. La tabla es: ".$result. "</br>";
      }
    }else{
      for($j=0; $j<21; $j++){
        $result = $var * $j;
        echo "$j. La tabla es: ".$result. "</br>";
      }
    }
  ?>
</body>
</html>