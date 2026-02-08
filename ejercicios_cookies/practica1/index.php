<?php
session_start();

// 1. SEGURIDAD
if (!isset($_SESSION["auth"])) {
    header("Location: login.php");
    exit();
}

$id_usuario = $_SESSION["usuario_id"];
$mensaje = "";

// 2. CONEXIÓN
$conexion = new mysqli('localhost', 'root', '', 'ejercicio1');
$conexion->set_charset("utf8");


// --- 3. LÓGICA DE BORRAR ---
if (isset($_GET['borrar'])) {
    $id_borrar = $_GET['borrar'];
    
    $sql_borrar = "DELETE FROM eventos WHERE id = ? AND id_usuario = ?";
    $stmt_borrar = $conexion->prepare($sql_borrar);
    $stmt_borrar->bind_param("ii", $id_borrar, $id_usuario);
    
    if ($stmt_borrar->execute()) {
        header("Location: index.php"); 
        exit(); 
    } else {
        $mensaje = "Error al borrar: " . $stmt_borrar->error;
    }
    $stmt_borrar->close();
}


// --- 4. LÓGICA DE CREAR ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo_form = $_POST["titulo"];
    $desc_form   = $_POST["descripcion"];
    $fecha_form  = $_POST["fecha"];
    $hora_form   = $_POST["hora"];
    $cat_form    = $_POST["categoria"];

    $insertarDatos = "INSERT INTO eventos (id_usuario, titulo, descripcion, fecha, hora, categoria) VALUES (?,?,?,?,?,?)";
    $stmt = $conexion->prepare($insertarDatos);
    $stmt->bind_param("isssss", $id_usuario, $titulo_form, $desc_form, $fecha_form, $hora_form, $cat_form);

    if($stmt->execute()){
        $mensaje = "Evento guardado correctamente";
    }else{
        $mensaje = "Error al guardar: " . $stmt->error;
    }
    $stmt->close();
}


// --- 5. LÓGICA DE LEER ---
$consulta = $conexion->prepare("SELECT id, titulo, descripcion, fecha, hora, categoria FROM eventos WHERE id_usuario=? ORDER BY fecha ASC, hora ASC");
$consulta->bind_param("i", $id_usuario);
$consulta->execute();
$resultado = $consulta->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Agenda</title>
</head>
<body>
    <h1>Mis Eventos</h1>
    
    <?php if($mensaje != "") echo "<p>$mensaje</p>"; ?>

    <table border="1">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($fila = $resultado->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $fila["titulo"] . "</td>";
                echo "<td>" . $fila["descripcion"] . "</td>";
                echo "<td>" . $fila["fecha"] . "</td>";
                echo "<td>" . $fila["hora"] . "</td>";
                echo "<td>" . $fila["categoria"] . "</td>";
                
                echo "<td>";
                // Enlace simple sin estilos, solo HTML
                echo "<a href='index.php?borrar=" . $fila['id'] . "' onclick='return confirm(\"¿Estás seguro?\")'>Borrar</a>";
                echo "</td>";
                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    
    <h3>Añadir Nuevo Evento</h3>
    <form action="" method="post">
        Título: <input type="text" name="titulo" required><br><br>
        Descripción: <input type="text" name="descripcion"><br><br>
        Fecha: <input type="date" name="fecha" required><br><br>
        Hora: <input type="time" name="hora" required><br><br>
        Categoría: <input type="text" name="categoria"><br><br>

        <button type="submit">Crear evento</button>
    </form>
    
    <br>
    <form action="logout.php" method="post">
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>
<?php
$conexion->close();
?>