<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estudiante.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <section class="header">
      <h1 class="mainTitle">Ingreso de Predio</h1>
    </section>
    <section class="mainForm">
      <div class="container">
        <form action="insertarPredio.php" method="POST">
            <div class="items">
              <!-- <p class="formTitle">Nombre</p> -->
              <input type="text" class="nameForm" name="modelo" placeholder="Modelo">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Apellido</p> -->
              <input type="text" class="surName" name="serie" placeholder="No. Serie">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Sexo</p> -->
              <input type="text" class="sexo" name="color" placeholder="Color">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Direccion</p> -->
              <input type="text" class="address" name="km" placeholder="Kilometraje">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Telefono</p> -->
              <input type="text" class="phoneNumber" name="placa" placeholder="Placa">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Telefono</p> -->
              <input type="text" class="phoneNumber" name="fabricacion" placeholder="Año de fabricacion">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Telefono</p> -->
              <input type="text" class="phoneNumber" name="Rodado" placeholder="Rodado">
            </div>
            <div class="items">
              <input type="submit" class="btn" name="" value="Enviar">
            </div>
          </form>
      </div>        
    </section>
  </div>
</body>
</html>
<!--http://localhost/trabajadorIntecap/-->
