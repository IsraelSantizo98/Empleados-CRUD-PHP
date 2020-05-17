<?php 
//en servidor se coloca el nombre del servidor ya que el nuestro es local se colcca localhost
  $servidor = "localhost";
  $basedatos = "intecap";//se coloca el nombre de la base de datos ya creada
  $usuario = "root";
  $contra = "";

  $trabajadorConexion = mysqli_connect($servidor, $usuario, $contra, $basedatos);
  $estudianteConexion = mysqli_connect($servidor, $usuario, $contra, $basedatos);
  $predioConexion = mysqli_connect($servidor, $usuario, $contra, $basedatos);
  $pasteleriaConexion = mysqli_connect($servidor, $usuario, $contra, $basedatos);

?>