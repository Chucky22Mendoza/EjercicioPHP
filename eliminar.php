<?php
//Hace conexión con conexión.php
include("conexion.php");
//Declara las variables nombre, apellido, correo
  $id_alumno = $_GET['id'];

//Inserta en la tabla "autores" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="DELETE FROM alumnos WHERE Id_alumno = $id_alumno";
//Abre conexión
  $resultado= $conexion->query($query);
//Si hay conexión los datos se llevarán hacía la tabla
  if($resultado){
    header("Location: tabla.php");
  }
  //Si no hay conexión aparecerá lo siguiente
  else {
    echo "Insercion no exitosa";
  }

?>