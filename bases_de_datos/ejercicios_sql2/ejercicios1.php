<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Consulta Notas</title>
</head>
<body>
    <h1>Consultar Notas del Alumno</h1>
    
    <form action="#" method="post">
        Introduce DNI: <input type="text" name="dni" required>
        <input type="submit" name="enviar" value="Buscar">
    </form>
    <br>

    <?php
    if (isset($_POST['enviar'])) {

        $conexion = new mysqli('localhost', 'root', '', 'centro');
        $conexion->set_charset("utf8"); 

        $dni_buscado = $_POST['dni'];

        // --- PARTE A: COMPROBAR SI EXISTE Y SACAR DATOS PERSONALES ---
        // Preparamos la consulta solo en la tabla 'alumnos'
        $sql_alumno = "SELECT nombre, edad FROM alumnos WHERE dni = ?";
        
        $stmt = $conexion->prepare($sql_alumno);    // Preparar
        $stmt->bind_param("s", $dni_buscado);       // Vincular ("s" porque DNI es string)
        $stmt->execute();                           // Ejecutar
        $stmt->store_result();                      // Guardar resultado para poder contar filas
        
        // Vinculamos las variables donde guardaremos el nombre y la edad
        $stmt->bind_result($nombre, $edad);

        // Comprobamos si la base de datos devolvió alguna fila (si existe el alumno)
        if ($stmt->num_rows > 0) {
            
            // Leemos los datos del alumno
            $stmt->fetch();
            
            // Mostramos la primera parte que pide el ejercicio [cite: 978]
            echo "<h3>Resultados para: $nombre (Edad: $edad)</h3>";

            // Cerramos la sentencia anterior para poder preparar una nueva
            $stmt->close(); 

            // --- PARTE B: SACAR ASIGNATURAS Y NOTAS (EL JOIN) ---
            $sql_notas = "SELECT asignaturas.nombre, matriculas.nota 
                          FROM matriculas 
                          INNER JOIN asignaturas ON matriculas.codigo = asignaturas.codigo
                          WHERE matriculas.dni = ? AND matriculas.nota >= 6
                          ORDER BY matriculas.nota DESC";

            $stmt2 = $conexion->prepare($sql_notas);
            $stmt2->bind_param("s", $dni_buscado);
            $stmt2->execute();
            $stmt2->bind_result($nombre_asignatura, $nota);

            echo "<ul>"; // Abrimos una lista desordenada
            $encontro_asignaturas = false;

            // Leemos fila a fila con un bucle while
            while ($stmt2->fetch()) {
                echo "<li>Asignatura: <strong>$nombre_asignatura</strong> - Nota: <strong>$nota</strong></li>";
                $encontro_asignaturas = true;
            }
            echo "</ul>";

            if (!$encontro_asignaturas) {
                echo "<p>El alumno existe, pero no tiene asignaturas aprobadas con nota >= 6.</p>";
            }

            // Cerramos la segunda sentencia
            $stmt2->close();

        } else {
            // Si num_rows es 0, el DNI no existe [cite: 977]
            echo "<p>Error: No existe ningún alumno con el DNI $dni_buscado.</p>";
            $stmt->close();
        }

        // 3. CERRAR CONEXIÓN
        $conexion->close();
    }
    ?>
</body>
</html>