
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
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $nombre_usuario=$_POST["nombre"];
    $contraseña_usuario=$_POST["contraseña"];
    $conexion = new mysqli('localhost', 'root', '', 'ejercicio1');
    $conexion->set_charset("utf8"); 


    $consulta_inicioSesion=$conexion->prepare("Select id , contraseña from usuario where id= ?");
    $consulta_inicioSesion->bind_param("s",$nombre_usuario);
    $resultado=$consulta_inicioSesion->execute();
    $resultado = $consulta_inicioSesion->get_result();
    $usuario = $resultado->fetch_assoc(); 
    
}
$conexion->close();
?>