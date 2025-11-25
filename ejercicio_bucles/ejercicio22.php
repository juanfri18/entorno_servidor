<?php
// Array con los nombres de los meses
$meses = array(
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril",
    5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto",
    9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
);

// Array con los días de la semana
$dias_semana = array("Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom");

// Número de días por mes (suponemos año no bisiesto)
$dias_por_mes = array(
    1 => 31, 2 => 28, 3 => 31, 4 => 30,
    5 => 31, 6 => 30, 7 => 31, 8 => 31,
    9 => 30, 10 => 31, 11 => 30, 12 => 31
);

// Día de la semana en que empieza el mes (lunes=1)
// Inicialmente 1 de enero = lunes
$dia_inicio = 1;

for($m = 1; $m <= 12; $m++){
    echo "<table border='1' cellspacing='0' cellpadding='5' style='margin-bottom:20px;'>";
    echo "<tr><th colspan='7' style='background-color:#f2f2f2;'>".$meses[$m]."</th></tr>";

    // Fila con los días de la semana
    echo "<tr>";
    foreach($dias_semana as $dia){
        echo "<th style='background-color:#e6e6e6;'>$dia</th>";
    }
    echo "</tr>";

    // Fila para los días
    $dia_semana = 1; // contador del día de la semana
    echo "<tr>";

    // Rellenar celdas vacías antes del primer día
    for($i=1; $i < $dia_inicio; $i++){
        echo "<td></td>";
        $dia_semana++;
    }

    // Rellenar los días del mes
    for($d = 1; $d <= $dias_por_mes[$m]; $d++){
        echo "<td>$d</td>";

        if($dia_semana % 7 == 0){ // salto de fila cada 7 días
            echo "</tr>";
            if($d != $dias_por_mes[$m]){
                echo "<tr>";
            }
            $dia_semana = 0;
        }
        $dia_semana++;
    }

    // Rellenar celdas vacías al final si la última semana no tiene 7 días
    if(($dia_semana-1) % 7 != 0){
        for($i = ($dia_semana-1); $i <= 7; $i++){
            echo "<td></td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    // Calcular el día de la semana del primer día del siguiente mes
    // Se suma el número de días del mes al día de inicio y se toma módulo 7
    $dia_inicio = ($dia_inicio + $dias_por_mes[$m] - 1) % 7 + 1;
}
?>
