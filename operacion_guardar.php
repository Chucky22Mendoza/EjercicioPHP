<?php
//Hace conexión con conexión.php
include("conexion.php");
//Declara las variables nombre, apellido, correo
  $nombre = $_POST['nombre_alumno'];
  $apellido = $_POST['apellidos_alumno'];
  $cuenta = $_POST['numero_cuenta'];
  $semestre = $_POST['semestre'];
  $grupo = $_POST['grupo'];

//Inserta en la tabla "autores" el nombre, el apellido y el correo las variables declaradas anteriormente
  $query="INSERT INTO alumnos(nombre_alumno, apellidos_alumno, num_cta, semestre, grupo) VALUES('$nombre','$apellido', $cuenta, $semestre,'$grupo')";
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
