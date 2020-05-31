<?php 
  //SE DEBE DE AGREGAR PARA INCLUIR EL ARCHIVO DE CONEXION A LA BASE DE DATOS
  include 'php/conexion.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de productos</title>
</head>
<body>
  <h1>Ingreso de productos</h1>
  <!-- Querys -->
  <form action="insertarProducto.php" method="POST">
  <input type="text" name="producto" placeholder="Ingrese nombre"><br>
  <!--SELECT SE USA CUANDO SE TRAE DE OTRA TABLA QUE NO SEA LA DEL FORM ACTION -->
  <select name="proveedor" id="">
  <?php 
    //SE SELECIONA QUE TABLA OBTENDRA LOS DATOS
    $instruct1 = "SELECT * FROM proveedores";
    //USA DE CONEXION.PHP  PARA QUE INGRESA A LA BASE DE DATOS
    $query1 = mysqli_query($productos_Conex,$instruct1);
    //PARA QUE TRAIGA TODO LA INFO DE LA TABLA PROVEEDORES
    while($r = mysqli_fetch_assoc($query1)){
      echo "<option value='".$r['idProveedores']."'>".$r['nombreCompania']."</option>";
    }
  ?>
  </select><br>
  <select name="categorias" id="">
  <?php 
    $instruct2 = "SELECT * FROM categorias";
    $query2 = mysqli_query($productos_Conex,$instruct2);
    while($r = mysqli_fetch_assoc($query2)){
      echo "<option value='".$r['idCategorias']."'>".$r['nombreCategoria']."</option>";
    }
  ?>
  </select><br>
  <input type="number" name="cantidadProducto" placeholder="Cantidad de producto"><br>
  <input type="number" name="precio" placeholder="Precio de producto"><br>
  <input type="number" name="existencia" placeholder="Existencias"><br>
  <input type="number" name="pedido" placeholder="Pedido"><br>
  <input type="text" name="nuevoPedido" placeholder="Nuevo pedido"><br>
  <input type="text" name="suspendido" placeholder="Suspendido"><br>
  <input type="submit" value="Registrar Producto">
  </form>
</body>
</html>