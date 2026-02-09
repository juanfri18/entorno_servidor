<?php
session_start();
$error = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $nombre_usuario=$_POST["nombre"];
    $contraseña_usuario=$_POST["contraseña"];
    $conexion = new mysqli('localhost', 'root', '', 'ejercicio1');
    $conexion->set_charset("utf8"); 

    $consulta_inicioSesion=$conexion->prepare("Select id ,nombre, password from usuarios where nombre= ?");
    $consulta_inicioSesion->bind_param("s",$nombre_usuario);
    $resultado=$consulta_inicioSesion->execute();
    $resultado = $consulta_inicioSesion->get_result();
    if ($fila = $resultado->fetch_assoc()) {
        
        if ($contraseña_usuario == $fila['password']) {
            
            $_SESSION["usuario_id"] = $fila['id'];
            $_SESSION["nombre"] = $fila['nombre'];
            $_SESSION["auth"] = true; 
            
            setcookie("alerta_evento", "", time() - 3600); 

            //   hay eventos en las próximas 24h?
           
            $sql_cookie = "SELECT id FROM eventos 
                           WHERE id_usuario = ? 
                           AND TIMESTAMP(fecha, hora) BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 24 HOUR)";
            
            $stmt_cookie = $conexion->prepare($sql_cookie);
            $stmt_cookie->bind_param("i", $fila['id']); 
            $stmt_cookie->execute();
            $stmt_cookie->store_result(); // Necesario para contar filas

            if ($stmt_cookie->num_rows > 0) {
                setcookie("alerta_evento", "1", time() + 3600);
            }
            
            $stmt_cookie->close();
            

            header("Location: index.php"); 
            exit();

        } else {
            $error = "La contraseña no coincide.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
    $consulta_inicioSesion->close();
    $conexion->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="post">
        nombre: <br>
        <input type="text" name="nombre"><br>
        contraseña: <br>
        <input type="text" name="contraseña"><br>
        <button type="submit">iniciar sesion</button>
    </form>
    <?php if(!empty($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
