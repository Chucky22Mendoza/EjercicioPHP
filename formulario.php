<!DOCTYPE html>
<html>
<head>
  <!--Titulo.-->
  <title>Registro Alumnos</title>
</head>
<!--Boddy, color de fondo naranja.-->
<body bgcolor="green">
  <center>
    <!--Hace conexión con "Operacion_guardar.php"-->
    <!--El [Method="POST"] envia los datos de forma que no podemos ver, a diferencia del GET que los envia a travez del URL-->
    <form action="operacion_guardar.php" method="POST">
    </br></br></br></br></br></br></br></br></br>
          <h3><font face="Arial">Favor de ingresar los datos para agregar un alumno</h3>
      <!--Acá están los textos donde vamos a introducir el nombre, apellido y el correo, más un botón para registrarse en la base de datos.-->
      
      <input type="text" required name="nombre_alumno" placeholder="Nombre del alumno" value="" /><br/><br/>
      <input type="text" required name="apellidos_alumno" placeholder="Apellidos del alumno" value="" /><br/><br/>
      <input type="text" required name="numero_cuenta" placeholder="Número de cuenta" value="" /><br/><br/>
      <input type="text" required name="semestre" placeholder="Semestre" value="" /><br/><br/>
      <input type="text" required name="grupo" placeholder="Grupo" value="" /><br/><br/>
      <input type="submit" value="Registrarse" />
    </form>
  </center>
</body>
</html>
