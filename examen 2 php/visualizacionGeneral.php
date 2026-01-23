<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php
    require_once 'Vehiculo.php';
    require_once 'RutaUrbana.php';
        // ---------- Datos Vehiculos ----------
$veh1=new Vehiculo("Orbea", "Urban 100", "1234 ABC");
$veh2 =new Vehiculo("Toyota", "Proace", "5678 DEF");
$veh3 =new Vehiculo("Renault", "Kangoo E-Tech", "9012 GHI"); 
$veh4=new Vehiculo("Mercedes", "eSprinter", "3456 JKL"); 
$veh5=new Vehiculo("Seat", "Mii Electric", "7890 MNO");

// ---------- Datos Rutas ----------
$ruta1=new Rutas("Ana López", $veh1, "2025-01-20", "09:15", 45, 12, 40, ["Centro", "Norte"], true);
$ruta2=new Rutas("Carlos Ruiz", $veh2, "2025-01-20", "11:30", 60, 18, 70, ["Centro", "Polígono"], false);
$ruta3=new Rutas("Ana López", $veh2, "2025-01-21", "16:30", 80, 48, 60, ["Ciudad A"], false);
$ruta4=new Rutas("Luis Gómez", $veh1, "2025-01-22", "10:10", 50, 14, 65, ["Puerto"], true);
$ruta5=new Rutas("María Torres", $veh3, "2025-01-22", "08:00", 30, 10, 55, ["Centro"], true);
$ruta6=new Rutas("Pedro Sánchez", $veh4, "2025-01-23", "12:45", 95, 52, 80, ["Polígono", "Sur"], false);
$ruta7=new Rutas("Lucía Martín", $veh5, "2025-01-23", "17:20", 40, 9, 30, ["Norte"], false);
$ruta8=new Rutas("María Torres", $veh3, "2025-01-24", "09:10", 70, 33, 72, ["Centro", "Este"], true) ;
$ruta9=new Rutas("Pedro Sánchez", $veh4, "2025-01-24", "14:00", 120, 60, 90, ["Ciudad A", "Sur"], false);
$ruta10=new Rutas("Lucía Martín", $veh5, "2025-01-25", "07:50", 55, 22, 65, ["Puerto", "Norte"], false);
    $arrayObjetos=[$ruta1,$ruta2,$ruta3,$ruta4,$ruta5,$ruta6,$ruta7,$ruta8,$ruta9,$ruta10];
        $mayorEficiencia=0;
        $distanciatotal=0;
        $cargaTotal=0;
        $eficienciaTotal=0;
        $velocidadMediaTotal=0;
    foreach($arrayObjetos as $objeto){
        echo"<tr><td>$objeto->conductor</td></tr>";
        echo"<tr><td>$objeto->vehiculoUtilizado</td></tr>";
        echo"<tr><td>$objeto->fecha</td></tr>";
        echo"<tr><td>$objeto->hora</td></tr>";
        echo"<tr><td>$objeto->duracion</td></tr>";
        echo"<tr><td>$objeto->distancia</td></tr>";
        echo"<tr><td>$objeto->cargaTransportada</td></tr>";
        echo"<tr><td>$objeto->zonasVisitadas</td></tr>";
        
        echo"<tr><td</td></tr>";
        $velocidadMediaTotal=$velocidadMediaTotal+(($objeto->distancia)/($objeto->duracion));
        $distanciatotal=$distanciatotal+($objeto->distancia);
        $cargaTotal=$cargaTotal+($objeto->cargaTransportada);
        $eficienciaTotal=$eficienciaTotal+$objeto->$calcularEficiencia;
       $eficiencia= $objeto->$calcularEficiencia;
       if($mayorEficiencia>$eficiencia){
        $objetoMayorEficiencia=$objeto;
       }
       
    }
    echo"<tr><td>Rutas totales: $objeto->numeroRutas</td></tr></table>";
    echo"objeto con mayor eficiencia$objetoMayorEficiencia->conductor,$objetoMayorEficiencia->vehiculoUtilizado,$objetoMayorEficiencia->fecha,$objetoMayorEficiencia->hora,$objetoMayorEficiencia->duracion,$objetoMayorEficiencia->distancia,$objetoMayorEficiencia->cargaTransportada,$objetoMayorEficiencia->zonasVisitadas";
    echo"<br><br>";
    echo"Rutas totales: $objeto->numeroRutas <br>";
    echo"distanciatotal: $distanciatotal <br>";
    echo"cargaTotal: $cargaTotal <br>";
    $eficienciaMedia= $eficienciaTotal/(count($arrayObjetos));
    echo"eficienciaMedia: $eficienciaMedia <br>";
    $velocidadMedia=$velocidadMediaTotal/(count($arrayObjetos));
    echo"velocidadMediaTotal: $velocidadMedia <br>";

 
 ?>
    <form action="#" method="post">
        texto:
        <input type="text" >
        <input type="submit" name="enviar">
    </form>
</body>
</html>


