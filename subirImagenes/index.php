<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
<h1>Agregar Imagenes</h1>
<nav class="sidebar">
  <ul>
    <li><a href="#">item 1</a></li>
    <li><a href="#">item 2</a>
      <ul>
        <li><a href="#">Subitem</a></li>
      </ul>
    </li>
    <li><a href="#">item 3</a></li>
      <ul>
        <li><a href="#">Subitem</a></li>
      </ul>
  </ul>

</nav>
  <form action="agregaImagenes.php" method="POST" enctype="multipart/form-data">
  <!-- name debe ser archivo o puede dar error si tiene otro nombre, el atributo multiple para subir vairos archivos -->
    <input type="file" id="archivo[]" name="archivo[]" multiple="">
    <input type="submit" value="Subir Imagenes">
  </form>
</body>
</html>