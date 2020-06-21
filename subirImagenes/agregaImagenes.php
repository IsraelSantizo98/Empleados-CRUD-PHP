<?php 
  include 'php/conexion.php';
  foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name){

    if($_FILES["archivo"]["name"][$key]){
      $filename = $_FILES["archivo"]["name"][$key];
      $source = $_FILES["archivo"]["tmp_name"][$key];
      //esta variable cambia el nombre de la carpeta que crea en la pc
      $directorio = 'fotos';
      //verifica si el directorio existe de lo contrario con die muerte el proceso
      if(!file_exists($directorio)){
        mkdir($directorio, 0777) or die ("No se puede crear el directorio de extraccion");
      }
      $dir = opendir($directorio);
      $target_path = $directorio.'/'.$filename;

      if(move_uploaded_file($source, $target_path)){
        echo "La foto se ha guardado correctamente";
        $instruc = "INSERT INTO fotos VALUES (NULL, '$target_path', 'Israel')";
        mysqli_query($conexion, $instruc);
      }
      else{
        echo "Error al subir la imagen";
      }
      closedir($dir);
    }
  }
?>