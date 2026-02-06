<?php
session_start();

// 1. Vaciar el array de sesión
$_SESSION = [];

// 2. Destruir la sesión en el servidor [cite: 293]
session_destroy();

// 3. Redirigir al login
header("Location: login.php");
exit();
?>