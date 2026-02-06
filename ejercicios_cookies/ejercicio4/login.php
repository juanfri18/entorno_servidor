<?php
session_start();

// Usuarios "falsos"
$usuarios_db = [
    "ana" => "1234",
    "juan" => "abcd"
];

$mensaje_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["usuario"];
    $pass = $_POST["password"];

    // Comprobamos si el usuario existe y la contraseña coincide
    if (isset($usuarios_db[$user]) && $usuarios_db[$user] == $pass) {

        $_SESSION["user"] = $user;
        $_SESSION["auth"] = true; // Marca de autenticado
        
        // Redirigir a la zona privada
        header("Location: home.php");
        exit(); 
    } else {
        $mensaje_error = "Usuario o contraseña incorrectos"; 
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="post">
        Usuario: <input type="text" name="usuario" required><br>
        Contraseña: <input type="password" name="password" required><br>
        <button type="submit">Entrar</button>
    </form>
    <p style="color:red"><?php echo $mensaje_error; ?></p>
</body>
</html>