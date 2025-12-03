<<<<<<< HEAD
<?php

$titulo = "Mi primera app en PHP";
//$nombre = trim(fgets(STDIN)); // trim elimina saltos de línea
// 4. Funciones
function saludar($nombre = "Mundo") {
    return "Hola, " . htmlspecialchars($nombre) . " 👋";
}

// 5. Lógica principal
$mensaje = saludar("Desarrollador");
// 6. Salida HTML (separa la lógica de la vista si crece mucho)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
</head>
<body>
    <h1><?= $titulo ?></h1>
    <p><?= $mensaje ?></p>
</body>
</html>
=======
<?php

$titulo = "Mi primera app en PHP";
//$nombre = trim(fgets(STDIN)); // trim elimina saltos de línea
// 4. Funciones
function saludar($nombre = "Mundo") {
    return "Hola, " . htmlspecialchars($nombre) . " 👋";
}

// 5. Lógica principal
$mensaje = saludar("Desarrollador");
// 6. Salida HTML (separa la lógica de la vista si crece mucho)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
</head>
<body>
    <h1><?= $titulo ?></h1>
    <p><?= $mensaje ?></p>
</body>
</html>
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
