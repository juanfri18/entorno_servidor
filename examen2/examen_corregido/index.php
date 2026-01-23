<?php
require_once 'Vehiculo.php';
require_once 'RutaUrbana.php';

$v1 = new Vehiculo("Orbea", "Urban", "1234 ABC");
$v2 = new Vehiculo("Toyota", "Proace", "5678 DEF");

$rutas = [];
$rutas[] = new RutaUrbana("Ana Lopez", $v1, "2025-01-20", "09:15", 45, 12, 40, ["Centro", "Norte"], true);
$rutas[] = new RutaUrbana("Carlos Ruiz", $v2, "2025-01-20", "11:30", 60, 20, 80, ["Poligono"], false); 
$rutas[] = new RutaUrbana("Pedro Sanchez", $v2, "2025-01-21", "14:00", 120, 60, 90, ["Sur"], false);

$sumaDistancia = 0;
$sumaCarga = 0;
$sumaEficiencia = 0;
$sumaVelocidad = 0; 
$conteoRutas = count($rutas);

$mejorEficiencia = -1;
$rutaMasEficiente = null;
$rutasAltoImpacto = []; 
$maxDistanciaImpacto = -1;
$rutaMaxDistanciaImpacto = null;
$rutasPorFecha = [];
?>

<!DOCTYPE html>
<html lang="es">
<head><title>Examen EcoLogistics</title></head>
<body>
    <table border="1">
        <tr>
            <th>Conductor</th><th>Vehículo</th><th>Fecha</th><th>Hora</th>
            <th>Duración</th><th>Distancia</th><th>Carga</th><th>Eficiencia</th><th>Impacto</th>
        </tr>
        <?php foreach ($rutas as $r): 
            $ef = $r->calcularEficiencia();
            $imp = $r->nivelImpacto();
            
            $sumaDistancia += $r->getDistancia();
            $sumaCarga += $r->getCarga();
            $sumaEficiencia += $ef;
            $sumaVelocidad += ($r->getDistancia() / $r->getDuracion());

            if ($ef > $mejorEficiencia) {
                $mejorEficiencia = $ef;
                $rutaMasEficiente = $r;
            }

            if ($imp >= 7) {
                $rutasAltoImpacto[] = $r;
                if ($r->getDistancia() > $maxDistanciaImpacto) {
                    $maxDistanciaImpacto = $r->getDistancia();
                    $rutaMaxDistanciaImpacto = $r;
                }
            }

            $f = $r->getFecha();
            if (!isset($rutasPorFecha[$f])) $rutasPorFecha[$f] = 0;
            $rutasPorFecha[$f]++;
        ?>
        <tr>
            <td><?= $r->getConductor() ?></td>
            <td><?= $r->getVehiculo() ?></td>
            <td><?= $r->getFechaSalida() ?></td> <td><?= "HH:MM" ?></td> 
            <td><?= $r->getDuracion() ?></td>
            <td><?= $r->getDistancia() ?></td>
            <td><?= $r->getCarga() ?></td>
            <td><?= $ef ?></td>
            <td><?= $imp ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    <p>Total rutas: <?= Ruta::$totalRutas ?></p>

    <h3>Resumen General</h3>
    <ul>
        <li>Distancia Total: <?= $sumaDistancia ?></li>
        <li>Carga Total: <?= $sumaCarga ?></li>
        <li>Eficiencia Media: <?= number_format($sumaEficiencia/$conteoRutas, 2) ?></li>
        <li>Velocidad Media: <?= number_format($sumaVelocidad/$conteoRutas, 2) ?></li>
    </ul>

    <h3>Ruta más eficiente</h3>
    <p><?= $rutaMasEficiente ?></p>

    <h3>Buscar Conductor</h3>
    <form method="POST">
        <input type="text" name="nom">
        <input type="submit">
    </form>
    <?php 
    if(isset($_POST['nom'])){
        $nombre = $_POST['nom'];
        foreach($rutas as $r){
            if(strpos($r->getConductor(), $nombre) !== false){
                echo $r . "<br>";
            }
        }
    }
    ?>

    <h3>Análisis Fechas</h3>
    <?php 
    $maxF = 0; $fechaTop = "";
    foreach($rutasPorFecha as $k => $v){
        echo "Fecha $k: $v rutas<br>";
        if($v > $maxF) { $maxF = $v; $fechaTop = $k; }
    }
    echo "Fecha con más rutas: $fechaTop";
    ?>

    <h3>Alto Impacto (>=7)</h3>
    <p>Total: <?= count($rutasAltoImpacto) ?></p>
    <?php if($rutaMaxDistanciaImpacto) echo "Mayor distancia: " . $rutaMaxDistanciaImpacto; ?>

    <h3>Análisis Zonas</h3>
    <form method="POST" enctype="multipart/form-data">
        Archivo: <input type="file" name="fichero">
        Zonas (csv): <input type="text" name="zonas">
        <input type="submit" name="btnZona">
    </form>
    <?php 
    if(isset($_POST['btnZona'])){
        $misZonas = explode(",", $_POST['zonas']);
        $coincidentes = 0;
        echo "<table>";
        foreach($rutas as $r){
            if(count(array_intersect($r->getZonas(), $misZonas)) > 0){
                $coincidentes++;
                echo "<tr><td>$r</td></tr>"; 
            }
        }
        echo "</table>";
        echo "Total coincidentes: $coincidentes";
    }
    ?>
</body>
</html>