<?php
session_start();

// SEGURIDAD
if (!isset($_SESSION["auth"])) {
    header("Location: login.php");
    exit();
}

$id_usuario = $_SESSION["usuario_id"];
$mensaje = "";

// CONEXIÓN
$conexion = new mysqli('localhost', 'root', '', 'ejercicio1');
$conexion->set_charset("utf8");


$id_editar = "";
$titulo = "";
$descripcion = "";
$fecha = "";
$hora = "";
$categoria = "";


// BORRAR 
if (isset($_GET['borrar'])) {
    $id_borrar = $_GET['borrar'];
    $sql_borrar = "DELETE FROM eventos WHERE id = ? AND id_usuario = ?";
    $stmt_borrar = $conexion->prepare($sql_borrar);
    $stmt_borrar->bind_param("ii", $id_borrar, $id_usuario);
    if ($stmt_borrar->execute()) {
        header("Location: index.php"); 
        exit(); 
    }
    $stmt_borrar->close();
}

// EDITAR 
if (isset($_GET['editar'])) {
    $id_editar = $_GET['editar'];
    
    $sql_buscar = "SELECT * FROM eventos WHERE id = ? AND id_usuario = ?";
    $stmt_buscar = $conexion->prepare($sql_buscar);
    $stmt_buscar->bind_param("ii", $id_editar, $id_usuario);
    $stmt_buscar->execute();
    $res_buscar = $stmt_buscar->get_result();
    
    if ($fila = $res_buscar->fetch_assoc()) {
        $titulo = $fila['titulo'];
        $descripcion = $fila['descripcion'];
        $fecha = $fila['fecha'];
        $hora = $fila['hora'];
        $categoria = $fila['categoria'];
    }
    $stmt_buscar->close();
}


//  GUARDAR (CREAR O EDITAR) 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos todos los datos del formulario
    $titulo_form = $_POST["titulo"];
    $desc_form   = $_POST["descripcion"];
    $fechaEnBruto  = new DateTime($_POST["fecha"]);
    $fecha_form=$fechaEnBruto->format('d/m/Y');
    $horaBruto = new DateTime($_POST["hora"]);
    $hora_form = $horaBruto->format('H:i');
    $cat_form    = $_POST["categoria"];
    
    // Recogemos el ID oculto 
    $id_evento_form = $_POST["id_evento"];
    //guaardamos la fecha de hoy 
    $hoy=new DateTime();
    if (!empty($id_evento_form)) {
        // ACTUALIZAR
        $sql = "UPDATE eventos SET titulo=?, descripcion=?, fecha=?, hora=?, categoria=? WHERE id=? AND id_usuario=?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssssii", $titulo_form, $desc_form, $fecha_form, $hora_form, $cat_form, $id_evento_form, $id_usuario);
        
        if($hoy->diff($fechaEnBruto)){
            $mensaje = "Error al guardar: la fecha introducida no puede ser pasada. ";
        }else{
            if($stmt->execute()){
                header("Location: index.php");
                exit();
            } else {
                $mensaje = "Error al actualizar: " . $stmt->error;
            }
        }
    } else {
        //  CREAR 
        $insertarDatos = "INSERT INTO eventos (id_usuario, titulo, descripcion, fecha, hora, categoria) VALUES (?,?,?,?,?,?)";
        $stmt = $conexion->prepare($insertarDatos);
        if($hoy->diff($fechaEnBruto)){
            $mensaje = "Error al guardar: la fecha introducida no puede ser pasada. ";
        }else{
            $stmt->bind_param("isssss", $id_usuario, $titulo_form, $desc_form, $fecha_form, $hora_form, $cat_form);

            if($stmt->execute()){
                $mensaje = "Evento guardado correctamente";
            } else {
                $mensaje = "Error al guardar: " . $stmt->error;
            }

        }
        
    }
    $stmt->close();
}


// LEER 
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
    <?php if (isset($_COOKIE['alerta_evento'])): ?>
        <div>
            <h2 style="color:orange">Tienes eventos programados para las próximas 24 horas!!</h2>
        </div>
    <?php endif; ?>
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
                $fechaEnBruto  = new DateTime($fila["fecha"]);
                $fecha_form=$fechaEnBruto->format('d/m/Y');
                $horaBruto = new DateTime($fila["hora"]);
                $hora_form = $horaBruto->format('H:i');
                echo "<tr>";
                echo "<td>" . $fila["titulo"] . "</td>";
                echo "<td>" . $fila["descripcion"] . "</td>";
                echo "<td>" . $fecha_form . "</td>";
                echo "<td>" . $hora_form . "</td>";
                echo "<td>" . $fila["categoria"] . "</td>";
    
                echo "<td>";
                echo "<a href='index.php?editar=" . $fila['id'] . "'>Editar</a>";
                echo " | ";
                echo "<a href='index.php?borrar=" . $fila['id'] . "' onclick='return confirm(\"¿Estás seguro?\")'>Borrar</a>";
                echo "</td>";
                
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    
    <h3><?php echo ($id_editar != "") ? " Editar Evento" : " Añadir Nuevo Evento"; ?></h3>
    
    <form action="" method="post">
        
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