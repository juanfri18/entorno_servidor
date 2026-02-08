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

// -------------------------------------------------------------------
// <--- AQUI HE AÑADIDO ESTO: VARIABLES PARA EL FORMULARIO
// Necesitamos estas variables vacías para que el formulario no falle al principio.
// Si editamos, estas variables se llenarán con datos de la BD.
$id_editar = ""; 
$titulo = "";
$descripcion = "";
$fecha = "";
$hora = "";
$categoria = "";
// -------------------------------------------------------------------


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

// -------------------------------------------------------------------
// <--- AQUI HE AÑADIDO ESTO: LÓGICA DE CARGAR DATOS PARA EDITAR (GET)
// Si la URL tiene ?editar=5, buscamos ese evento y rellenamos las variables
if (isset($_GET['editar'])) {
    $id_editar = $_GET['editar'];
    $stmt = $conexion->prepare("SELECT * FROM eventos WHERE id = ? AND id_usuario = ?");
    $stmt->bind_param("ii", $id_editar, $id_usuario);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($fila = $res->fetch_assoc()) {
        $titulo = $fila['titulo'];
        $descripcion = $fila['descripcion'];
        $fecha = $fila['fecha'];
        $hora = $fila['hora'];
        $categoria = $fila['categoria'];
    }
    $stmt->close();
}
// -------------------------------------------------------------------


// --- 4. LÓGICA DE GUARDAR (MODIFICADA PARA ACEPTAR EDITAR Y CREAR) ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo_form = $_POST["titulo"];
    $desc_form   = $_POST["descripcion"];
    $fecha_form  = $_POST["fecha"];
    $hora_form   = $_POST["hora"];
    $cat_form    = $_POST["categoria"];
    
    // <--- AQUI HE AÑADIDO ESTO: Recogemos el ID oculto
    $id_evento_form = $_POST["id_evento"]; 

    // <--- AQUI HE MODIFICADO LA LÓGICA:
    // Si hay un ID en el campo oculto, hacemos UPDATE. Si no, hacemos tu INSERT normal.
    if (!empty($id_evento_form)) {
        // --- OPCIÓN ACTUALIZAR ---
        $sql = "UPDATE eventos SET titulo=?, descripcion=?, fecha=?, hora=?, categoria=? WHERE id=? AND id_usuario=?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssssii", $titulo_form, $desc_form, $fecha_form, $hora_form, $cat_form, $id_evento_form, $id_usuario);
        
        if($stmt->execute()){
            // Redirigimos para limpiar la URL (quitar ?editar=...)
            header("Location: index.php");
            exit();
        } else {
            $mensaje = "Error al actualizar: " . $stmt->error;
        }
    } else {
        // --- OPCIÓN CREAR (TU CÓDIGO ORIGINAL) ---
        $insertarDatos = "INSERT INTO eventos (id_usuario, titulo, descripcion, fecha, hora, categoria) VALUES (?,?,?,?,?,?)";
        $stmt = $conexion->prepare($insertarDatos);
        $stmt->bind_param("isssss", $id_usuario, $titulo_form, $desc_form, $fecha_form, $hora_form, $cat_form);

        if($stmt->execute()){
            $mensaje = "Evento guardado correctamente";
        }else{
            $mensaje = "Error al guardar: " . $stmt->error;
        }
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
                // <--- AQUI HE AÑADIDO ESTO: EL ENLACE EDITAR
                echo "<a href='index.php?editar=" . $fila['id'] . "'>Editar</a>";
                echo " | "; 
                echo "<a href='index.php?borrar=" . $fila['id'] . "' onclick='return confirm(\"¿Estás seguro?\")'>Borrar</a>";
                echo "</td>";
                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    
    <h3><?php echo ($id_editar != "") ? "Editar Evento" : "Añadir Nuevo Evento"; ?></h3>
    
    <form action="index.php" method="post">
        <input type="hidden" name="id_evento" value="<?php echo $id_editar; ?>">
        
        Título: <input type="text" name="titulo" value="<?php echo $titulo; ?>" required><br><br>
        Descripción: <input type="text" name="descripcion" value="<?php echo $descripcion; ?>"><br><br>
        Fecha: <input type="date" name="fecha" value="<?php echo $fecha; ?>" required><br><br>
        Hora: <input type="time" name="hora" value="<?php echo $hora; ?>" required><br><br>
        Categoría: <input type="text" name="categoria" value="<?php echo $categoria; ?>"><br><br>

        <button type="submit"><?php echo ($id_editar != "") ? "Actualizar" : "Crear evento"; ?></button>
        
        <?php if($id_editar != ""): ?>
            <a href="index.php">Cancelar edición</a>
        <?php endif; ?>
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