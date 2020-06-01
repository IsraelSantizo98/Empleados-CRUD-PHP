<?php 
  include 'php/conexion.php';
  //SE TRAEN TODOS LOS NAMES DEL FORM Y SE IGUALAN AL METODO POST
  $producto = $_POST['producto'];
  $proveedor = $_POST['proveedor'];
  $categorias = $_POST['categorias'];
  $cantidadProducto = $_POST['cantidadProducto'];
  $precio = $_POST['precio'];
  $existencia = $_POST['existencia'];
  $pedido = $_POST['pedido'];
  $nuevoPedido = $_POST['nuevoPedido'];
  $suspendido = $_POST['suspendido'];
  //INGRESO A LA TABLA PRODUCTOS
  $instruc1 = "INSERT INTO  productos VALUES (null, '$producto', $proveedor, $categorias, $cantidadProducto, $precio, $existencia, $pedido, '$nuevoPedido', '$suspendido')";

  $agregaProducto = mysqli_query($productos_Conex, $instruc1);
  if($agregaProducto){
    //HEADER SE USA PARA REDIRIGIR A OTRA PAGINA
    header('location: notificacion.php?notificacion=1');
  }
  else {
    header('location: notificacion.php?notificacion=2');
  }
?>