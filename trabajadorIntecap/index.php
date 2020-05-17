<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <section class="header">
      <h1 class="mainTitle">Ingreso de trabajadores</h1>
    </section>
    <section class="mainForm">
      <div class="container">
        <form action="insertaPersonal.php" method="POST">
            <div class="items">
              <p class="formTitle">Nombre</p>
              <input type="text" class="nameForm" name="nombreTrabajador" placeholder="Ingrese el nombre del trajador">
            </div>
            <div class="items">
              <p class="formTitle">Apellido</p>
              <input type="text" class="surName" name="apellidoTrabajador" placeholder="Ingrese el apellido del trabajador">
            </div>
            <div class="items">
              <p class="formTitle">Estado Civil</p>
              <input type="text" class="estadoCivil" name="civil" placeholder="Ingrese estado civil">
            </div>
            <div class="items">
              <p class="formTitle">Sexo</p>
              <input type="text" class="sexo" name="sexo" placeholder="Ingrese estado civil">
            </div>
            <div class="items">
              <p class="formTitle">Direccion</p>
              <input type="text" class="address" name="direccion" placeholder="Ingrese estado civil">
            </div>
            <div class="items">
              <p class="formTitle">Telefono</p>
              <input type="text" class="phoneNumber" name="telefono" placeholder="Ingrese estado civil">
            </div>
            <div class="items">
              <p class="formTitle">DPI</p>
              <input type="text" class="dpiNumber" name="dpi" placeholder="Ingrese estado civil">
            </div>
            <div class="items">
              <p class="formTitle">Fecha de nacimiento</p>
              <input type="date" class="birthdate" name="fechaNacimiento" placeholder="Ingrese estado civil">
            </div>
            <div class="items">
              <p class="formTitle">Foto</p>
              <input type="text" class="photo" name="foto" placeholder="Ingrese estado civil">
            </div>
            <div class="items">
              <input type="submit" class="btn" name="" value="Registar datos">
            </div>
          </form>
      </div>
          
    </section>
  </div>
</body>
</html>
<!--http://localhost/trabajadorIntecap/-->
