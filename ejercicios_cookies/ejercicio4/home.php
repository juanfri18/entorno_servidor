<?php
session_start();
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h1>
    <p>Estás en la zona privada.</p>
    
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>