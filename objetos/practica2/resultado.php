<?php
// --- LÓGICA PHP (Igual que antes) ---
require_once 'Invento.php'; 
require_once 'InventoMecanico.php';
require_once 'InventoElectronico.php';

$miInvento = null;
$error = null;
$proposito = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recogemos datos (usamos ?? '' para evitar errores si está vacío)
    $nombre = $_POST['Nombre'] ?? '';
    $proposito = $_POST['Proposito'] ?? '';
    $fecha = $_POST['fechaPrototipo'] ?? '';
    $coste = $_POST['coste'] ?? 0;
    $tipo = $_POST['tipo'] ?? ''; 
    $materiales = isset($_POST['materiales']) ? $_POST['materiales'] : [];

    try {
        if ($tipo == "mecanico") {
            $miInvento = new InventoMecanico($nombre, $proposito, $fecha, $coste, $materiales);
        } elseif ($tipo == "electronico") {
            $miInvento = new InventoElectronico($nombre, $proposito, $fecha, $coste, $materiales);
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Informe Técnico</title>
</head>
<body>

    <h1>Informe Técnico del Invento</h1>

    <?php if ($error): ?>
        <p>Error: <?php echo $error; ?></p>
        <a href="index.php">Volver al formulario</a>

    <?php elseif ($miInvento): ?>
        
        <h3>Ficha Básica</h3>
        <p><?php echo $miInvento; ?></p>
        <p>Propósito: <?php echo htmlspecialchars($proposito); ?></p>

        <h3>Análisis Técnico</h3>
        <ul>
            <li>Descripción Técnica: <?php echo $miInvento->descripcionTecnica(); ?></li>
            <li>Complejidad Calculada: <?php echo $miInvento->calcularComplejidad(); ?></li>
            <li>Impacto Ambiental: <?php echo $miInvento->impactoAmbiental(); ?></li>
        </ul>

        <h3>Conclusión</h3>
        <p>
            <?php if ($miInvento->esRentable()): ?>
                EL PROYECTO ES RENTABLE
            <?php else: ?>
                EL PROYECTO NO ES RENTABLE (Coste excesivo)
            <?php endif; ?>
        </p>

        <hr>

        <h4>Estadísticas del Sistema</h4>
        <p>Total de inventos procesados: <?php echo Invento::$totalInventos; ?></p>

        <br>
        <a href="index.php">Procesar otro invento</a>

    <?php else: ?>
        <p>No se han recibido datos. <a href="index.php">Ir al formulario</a></p>
    <?php endif; ?>

</body>
</html>