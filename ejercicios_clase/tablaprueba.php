<<<<<<< HEAD
<?php
// Inicializamos variables
$num1 = $num2 = $resultado = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger valores del formulario
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $resultado = $num1 + $num2;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de dos números</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: center; }
        input { padding: 5px; width: 100px; }
        button { padding: 5px 10px; }
    </style>
</head>
<body>
    <h1>Suma de dos números</h1>

    <form method="POST">
        <label>Primer número:</label>
        <input type="number" name="num1" step="any" required value="<?= htmlspecialchars($num1) ?>">
        <br><br>
        <label>Segundo número:</label>
        <input type="number" name="num2" step="any" required value="<?= htmlspecialchars($num2) ?>">
        <br><br>
        <button type="submit">Calcular suma</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h2>Resultado</h2>
        <table>
            <tr>
                <th>Número 1</th>
                <th>Número 2</th>
                <th>Suma</th>
            </tr>
            <tr>
                <td><?= $num1 ?></td>
                <td><?= $num2 ?></td>
                <td><?= $resultado ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>
=======
<?php
// Inicializamos variables
$num1 = $num2 = $resultado = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger valores del formulario
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $resultado = $num1 + $num2;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de dos números</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 10px; text-align: center; }
        input { padding: 5px; width: 100px; }
        button { padding: 5px 10px; }
    </style>
</head>
<body>
    <h1>Suma de dos números</h1>

    <form method="POST">
        <label>Primer número:</label>
        <input type="number" name="num1" step="any" required value="<?= htmlspecialchars($num1) ?>">
        <br><br>
        <label>Segundo número:</label>
        <input type="number" name="num2" step="any" required value="<?= htmlspecialchars($num2) ?>">
        <br><br>
        <button type="submit">Calcular suma</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h2>Resultado</h2>
        <table>
            <tr>
                <th>Número 1</th>
                <th>Número 2</th>
                <th>Suma</th>
            </tr>
            <tr>
                <td><?= $num1 ?></td>
                <td><?= $num2 ?></td>
                <td><?= $resultado ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
