<?php
// a) Generar un array con 30 números aleatorios entre 1 y 15
$numeros_aleatorios = array();
for ($i = 0; $i < 30; $i++) {
    $numeros_aleatorios[] = rand(1, 15);
}

// b) Calcular cuántas veces aparece cada número
$frecuencias = array_count_values($numeros_aleatorios);

// Asegurar que todos los números del 1 al 15 aparezcan (aunque sea con frecuencia 0)
for ($i = 1; $i <= 15; $i++) {
    if (!isset($frecuencias[$i])) {
        $frecuencias[$i] = 0;
    }
}

// c) Ordenar los resultados por número
ksort($frecuencias);

// d) Determinar el/los número/s que más veces aparecen
$max_frecuencia = max($frecuencias);
$mas_frecuentes = array_keys($frecuencias, $max_frecuencia);

// e) Determinar el/los número/s que menos veces aparecen
$min_frecuencia = min($frecuencias);
$menos_frecuentes = array_keys($frecuencias, $min_frecuencia);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Frecuencia de números aleatorios</title>

</head>
<body>
    <h1>Frecuencia de aparición de números aleatorios</h1>
    <table>
        <tr>
            <th>Número</th>
            <th>Frecuencia</th>
        </tr>
        <?php foreach ($frecuencias as $numero => $frecuencia){
            echo"<tr>";
                echo "<td> $numero </td>";
                echo "<td> $frecuencia </td>";
            echo "</tr>";
        } 
         ?>
    </table>

    <p><strong>Número(s) que más veces aparecen (<?= $max_frecuencia ?> veces):</strong>
        <?= implode(', ', $mas_frecuentes) ?>
    </p>

    <p><strong>Número(s) que menos veces aparecen (<?= $min_frecuencia ?> veces):</strong>
        <?= implode(', ', $menos_frecuentes) ?>
    </p>
</body>
</html>
