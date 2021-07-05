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
        <?php
            //Hace conexión con la base de datos
            include("conexion.php");
            $id_alumno = $_GET['id'];
            $query ="SELECT * FROM alumnos WHERE Id_alumno = $id_alumno";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <form action="operacion_actualizar.php?id=<?php echo $row['Id_alumno']; ?>" method="POST">
                    </br></br></br></br></br></br></br></br></br>
                    <h3><font face="Arial">Favor de ingresar los datos para actualizar un alumno</h3>
                    
                    <input type="text" required name="nombre_alumno" placeholder="Nombre del alumno" value="<?php echo $row['nombre_alumno']; ?>" /><br/><br/>
                    <input type="text" required name="apellidos_alumno" placeholder="Apellidos del alumno" value="<?php echo $row['apellidos_alumno']; ?>" /><br/><br/>
                    <input type="text" required name="numero_cuenta" placeholder="Número de cuenta" value="<?php echo $row['num_cta']; ?>" /><br/><br/>
                    <input type="text" required name="semestre" placeholder="Semestre" value="<?php echo $row['semestre']; ?>" /><br/><br/>
                    <input type="text" required name="grupo" placeholder="Grupo" value="<?php echo $row['grupo']; ?>" /><br/><br/>
                    <input type="submit" value="Actualizar" />
                </form>
        <?php
            }
        ?>
    </center>
</body>
</html>