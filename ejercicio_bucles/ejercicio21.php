<?php
function calificacion($nota){
    if($nota >= 0 && $nota <= 4){
        return "Suspenso";
    } elseif($nota == 5){
        return "Aprobado";
    } elseif($nota == 6){
        return "Bien";
    } elseif($nota == 7 || $nota == 8){
        return "Notable";
    } elseif($nota == 9){
        return "Sobresaliente";
    } elseif($nota == 10){
        return "Matrícula de honor";
    } else {
        return "Nota inválida";
    }
}
$notas=array();
for($i=0;$i<=15;$i++){
    $notas[$i]=rand(0,10);
}
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Alumno</th><th>Nota</th><th>Calificación</th></tr>";

for($i = 0; $i < count($notas); $i++){
    echo "<tr>";
    echo "<td>".($i + 1)."</td>";
    echo "<td>".$notas[$i]."</td>";
    echo "<td>".calificacion($notas[$i])."</td>";
    echo "</tr>";
}

echo "</table>";?>