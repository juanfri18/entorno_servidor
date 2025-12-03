<<<<<<< HEAD
<?php 
$numeros = array();
for ($i = 0; $i <= 4; $i++) {
    $numeros[$i] = rand(1, 10);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <h2>Tabla de números, cuadrados y cubos</h2>

    <table border="1" cellpadding="5">
        <tr>
            <td style="background-color: #000000ff; color: white;"><strong>Número</strong></td>
            <td style="background-color: #000000ff; color: white;"><strong>Cuadrado</strong></td>
            <td style="background-color: #000000ff; color: white;"><strong>Cubo</strong></td>
        </tr>
        
        <?php 
        for ($x = 0; $x <= 3; $x++) { 
            if (($x % 2) == 0) {
                // Filas pares: verde oscuro
                echo "<tr>";
                echo '<td style="background-color: #295324ff; color: white;">' . $numeros[$x] . '</td>';
                echo '<td style="background-color: #295324ff; color: white;">' . ($numeros[$x] ** 2) . '</td>';
                echo '<td style="background-color: #295324ff; color: white;">' . ($numeros[$x] ** 3) . '</td>';
                echo "</tr>";
            } else {
                // Filas impares: verde claro
                echo "<tr>";
                echo '<td style="background-color: #84d47bff; color: white;">' . $numeros[$x] . '</td>';
                echo '<td style="background-color: #84d47bff; color: white;">' . ($numeros[$x] ** 2) . '</td>';
                echo '<td style="background-color: #84d47bff; color: white;">' . ($numeros[$x] ** 3) . '</td>';
                echo "</tr>";
            }
        } 
        ?> 
    </table>
</body>
</html>
=======
<?php 
$numeros = array();
for ($i = 0; $i <= 4; $i++) {
    $numeros[$i] = rand(1, 10);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <h2>Tabla de números, cuadrados y cubos</h2>

    <table border="1" cellpadding="5">
        <tr>
            <td style="background-color: #000000ff; color: white;"><strong>Número</strong></td>
            <td style="background-color: #000000ff; color: white;"><strong>Cuadrado</strong></td>
            <td style="background-color: #000000ff; color: white;"><strong>Cubo</strong></td>
        </tr>
        
        <?php 
        for ($x = 0; $x <= 3; $x++) { 
            if (($x % 2) == 0) {
                // Filas pares: verde oscuro
                echo "<tr>";
                echo '<td style="background-color: #295324ff; color: white;">' . $numeros[$x] . '</td>';
                echo '<td style="background-color: #295324ff; color: white;">' . ($numeros[$x] ** 2) . '</td>';
                echo '<td style="background-color: #295324ff; color: white;">' . ($numeros[$x] ** 3) . '</td>';
                echo "</tr>";
            } else {
                // Filas impares: verde claro
                echo "<tr>";
                echo '<td style="background-color: #84d47bff; color: white;">' . $numeros[$x] . '</td>';
                echo '<td style="background-color: #84d47bff; color: white;">' . ($numeros[$x] ** 2) . '</td>';
                echo '<td style="background-color: #84d47bff; color: white;">' . ($numeros[$x] ** 3) . '</td>';
                echo "</tr>";
            }
        } 
        ?> 
    </table>
</body>
</html>
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
