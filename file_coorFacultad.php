<?php
// $_FILES['archivo que vasmos aguardar nombre']["propiedades del archivo error nombre imagen.loquesea"] ['size donde se guardara el archivo temporal']

if ($_FILES['archivo']["error"] > 0)
  {
   "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
else
  {
  	//escribe las caracteristicas de los archivos
   "Nombre: " . $_FILES['archivo']['name'] . "<br>";
   "Tipo: " . $_FILES['archivo']['type'] . "<br>";
   "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
   "Carpeta temporal: " . $_FILES['archivo']['tmp_name']; }

  /*ahora co la funcion move_uploaded_file lo guardaremos en el destino que queramos*/

	move_uploaded_file($_FILES['archivo']['tmp_name'],'documentos_coorFacultad/'.$_FILES['archivo']['name']); //mover de la carpeta a la carpeta temporal

  header('Location: listar_Documento_coorFacultad.php');
?>