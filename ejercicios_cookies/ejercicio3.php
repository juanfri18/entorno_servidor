<?php
// ¡IMPORTANTÍSIMO! Iniciar sesión siempre al principio
session_start();

// Lógica de REINICIAR (Botón de reset)
if (isset($_POST["reiniciar"])) {
    // Borramos la variable de sesión específica
    unset($_SESSION["visitas"]);
    // Opcional: destruir toda la sesión con session_destroy();
}

// Lógica del CONTADOR
if (!isset($_SESSION["visitas"])) {
    // Si no existe, la creamos e iniciamos en 1
    $_SESSION["visitas"] = 1;
} else {
    // Si ya existe, sumamos 1
    $_SESSION["visitas"]++;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3: Contador</title>
</head>
<body>
    <h1>Contador de Visitas</h1>
    <p>Has visitado esta página <?php echo $_SESSION["visitas"]; ?> veces.</p>
    
    <form action="" method="post">
        <button type="submit" name="reiniciar">Reiniciar Contador</button>
    </form>
</body>
</html>