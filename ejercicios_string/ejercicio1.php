<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprobación de la letra "p"</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .contiene {
            color: green;
            font-weight: bold;
        }
        .no-contiene {
            color: red;
        }
    </style>
</head>
<body>

<?php
// Definimos un array con 5 cadenas
$palabras = ["perro", "gato", "Piedra", "sol", "campeón"];

echo "<table>";
echo "<tr><th>Cadena</th><th>¿Contiene 'p'?</th></tr>";

// Recorremos el array
foreach ($palabras as $palabra) {
    // Buscamos la letra 'p' (insensible a mayúsculas/minúsculas)
    if (stripos($palabra, 'p') !== false) {
        echo "<tr><td>$palabra</td><td class='contiene'>Sí</td></tr>";
    } else {
        echo "<tr><td>$palabra</td><td class='no-contiene'>No</td></tr>";
    }
}

echo "</table>";
?>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comprobación de la letra "p"</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .contiene {
            color: green;
            font-weight: bold;
        }
        .no-contiene {
            color: red;
        }
    </style>
</head>
<body>

<?php
// Definimos un array con 5 cadenas
$palabras = ["perro", "gato", "Piedra", "sol", "campeón"];

echo "<table>";
echo "<tr><th>Cadena</th><th>¿Contiene 'p'?</th></tr>";

// Recorremos el array
foreach ($palabras as $palabra) {
    // Buscamos la letra 'p' (insensible a mayúsculas/minúsculas)
    if (stripos($palabra, 'p') !== false) {
        echo "<tr><td>$palabra</td><td class='contiene'>Sí</td></tr>";
    } else {
        echo "<tr><td>$palabra</td><td class='no-contiene'>No</td></tr>";
    }
}

echo "</table>";
?>

</body>
</html>
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
