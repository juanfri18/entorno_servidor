<?php
// 1. Lógica para GUARDAR la preferencia (antes del HTML)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tema_elegido = $_POST["tema"];
    // Guardamos la cookie por 30 días
    setcookie("tema", $tema_elegido, time() + (30 * 24 * 60 * 60));
    
    // Truco: Actualizamos la variable $tema_actual al momento para que el cambio de color sea instantáneo
    $tema_actual = $tema_elegido;
} else {
    // 2. Lógica para LEER la preferencia
    // Si existe la cookie la usamos, si no, por defecto "claro"
    $tema_actual = $_COOKIE["tema"] ?? "claro";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2: Tema</title>
    <style>
        body {
            /* Aplicamos el estilo según la variable PHP */
            background-color: <?php echo ($tema_actual == 'oscuro') ? '#333' : '#FFF'; ?>;
            color: <?php echo ($tema_actual == 'oscuro') ? '#FFF' : '#000'; ?>;
        }
    </style>
</head>
<body>
    <h1>Estás usando el tema: <?php echo $tema_actual; ?></h1>
    
    <form action="" method="post">
        <label>Elige tu tema:</label>
        <select name="tema">
            <option value="claro">Claro</option>
            <option value="oscuro">Oscuro</option>
        </select>
        <button type="submit">Guardar Preferencia</button>
    </form>
</body>
</html>