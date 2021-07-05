<!DOCTYPE html>
<html>
<head>
  <title>Tabla de alumnos</title>
</head>
<body>
    <center>
        <table bgcolor="green" border="3">
            <thead>
                <tr>
                  <!--Acá usamos un href para crear un nuevo registro-->
                    <th colspan="1"><a href="formulario.php">Nuevo</a></th>
                    <th colspan="5">Lista de Alumnos</th>
                </tr>
            </thead>
            <!--Se siguen añadiendo valores a la tabla de HTML (los correspondientes a nuestra base de daots)-->
            <tbody>
                <tr>
                  <td>Id alumno</td>
                  <td>Nombre</td>
                  <td>Apellidos</td>
                  <td>N° Cuenta</td>
                  <td>Semestre</td>
                  <td>Grupo</td>
                  <td colspan="2">Alumnos</td>

                </tr>
            <?php
            //Hace conexión con la base de datos
                include("conexion.php");
            //Básicamente, selecciona la tabla usuarios para pasarla a nuestra tabla en PHP
                $query="SELECT * FROM alumnos";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
              ?>

                <tr>
                  <td><?php echo $row['Id_alumno']; ?></td>
                  <td><?php echo $row['nombre_alumno']; ?></td>
                  <td><?php echo $row['apellidos_alumno']; ?></td>
                  <td><?php echo $row['num_cta']; ?></td>
                  <td><?php echo $row['semestre']; ?></td>
                  <td><?php echo $row['grupo']; ?></td>
                 
                  <!--Se crea un href para los botones Modificar y Eliminar-->
                  <td><a href="modificar.php?id=<?php echo $row['Id_alumno']; ?>">Modificar</a></td>
                  <td><a href="eliminar.php?id=<?php echo $row['Id_alumno']; ?>">Eliminar</a></td>

                </tr>
            <?php
                }
            ?>

            </tbody>
        </table>
    </center>
</body>
</html>
