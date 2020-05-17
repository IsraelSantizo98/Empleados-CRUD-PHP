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
      <h1 class="mainTitle">Ingreso de estudiantes</h1>
    </section>
    <section class="mainForm">
      <div class="container">
        <form action="insertaEstudiante.php" method="POST">
            <div class="items">
              <!-- <p class="formTitle">Nombre</p> -->
              <input type="text" class="nameForm" name="nombreTrabajador" placeholder="Nombre">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Apellido</p> -->
              <input type="text" class="surName" name="apellidoTrabajador" placeholder="Apellido">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Sexo</p> -->
              <input type="text" class="sexo" name="sexo" placeholder="Sexo">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Direccion</p> -->
              <input type="text" class="address" name="direccion" placeholder="Direccion">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Telefono</p> -->
              <input type="text" class="phoneNumber" name="telefono" placeholder="Telefono">
            </div>
            <div class="items">
              <!-- <p class="formTitle">DPI</p> -->
              <input type="text" class="dpiNumber" name="dpi" placeholder="DPI">
            </div>
            <div class="items">
              <!-- <p class="formTitle">Certificado de estudios</p> -->
              <input type="text" class="certificado" name="certificadoEstudio" placeholder="Certificado de estudios">
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
