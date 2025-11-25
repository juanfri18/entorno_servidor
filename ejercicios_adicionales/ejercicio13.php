<!DOCTYPE html>
<!-- FALTA POR HACER EL ULTIMO APARTADO -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas de alumnos</title>
<style>
    table {
        border-collapse: separate;
        border: 2px solid black;
        width:40%;
    }
    thead{
        text-align: center;
    }
    th{
        background-color: #0059ffff;
    }
    thead td {
        background-color: #4c9fffff;
        color: 2 px solid black;
    }
    tbody{
        text-align: center;

    }
    tbody th {
        background-color: #000000ff;
        color: white;
    }
    tbody td{
        background-color: #83b9ffff;
        
    }
</style>    
<?php
$fabrica = [
    "Linea 1" => [
        ["produccion" => 500, "defectuosos" => 20, "parada" => 1.5],
        ["produccion" => 700, "defectuosos" => 30, "parada" => 2],
        ["produccion" => 800, "defectuosos" => 45, "parada" => 2.2],
        ["produccion" => 600, "defectuosos" => 3, "parada" => 2],
        ["produccion" => 650, "defectuosos" => 8, "parada" => 2.5],
        ["produccion" => 2000, "defectuosos" => 98, "parada" => 3.5],
        ["produccion" => 250, "defectuosos" => 2, "parada" => 0.1]
    ],
    "Linea 2" => [
        ["produccion" => 500, "defectuosos" => 10, "parada" => 1.5],
        ["produccion" => 500, "defectuosos" => 10, "parada" => 1.5],
        ["produccion" => 500, "defectuosos" => 10, "parada" => 1.5],
        ["produccion" => 500, "defectuosos" => 10, "parada" => 1.5],
        ["produccion" => 500, "defectuosos" => 10, "parada" => 1.5],
        ["produccion" => 500, "defectuosos" => 10, "parada" => 1.5],
        ["produccion" => 500, "defectuosos" => 10, "parada" => 1.5]    
    ],
    "Linea 3" => [
        ["produccion" => 500, "defectuosos" => 10, "parada" => 1.5],
        ["produccion" => 550, "defectuosos" => 15, "parada" => 1.8],
        ["produccion" => 600, "defectuosos" => 12, "parada" => 2],
        ["produccion" => 650, "defectuosos" => 11, "parada" => 1.6],
        ["produccion" => 700, "defectuosos" => 20, "parada" => 2.1],
        ["produccion" => 750, "defectuosos" => 18, "parada" => 2.3],
        ["produccion" => 800, "defectuosos" => 25, "parada" => 2.5]
    ],
    "Linea 4" => [
        ["produccion" => 900, "defectuosos" => 10, "parada" => 1],
        ["produccion" => 950, "defectuosos" => 12, "parada" => 1.2],
        ["produccion" => 1000, "defectuosos" => 8, "parada" => 1.5],
        ["produccion" => 1100, "defectuosos" => 14, "parada" => 1.8],
        ["produccion" => 1050, "defectuosos" => 11, "parada" => 1.4],
        ["produccion" => 1200, "defectuosos" => 16, "parada" => 1.9],
        ["produccion" => 1250, "defectuosos" => 20, "parada" => 2]
    ]
];
?>

<!-- estructura tabla -->
 <table>
    <thead>
        <tr ><th colspan="3">FABRICA DE CHOCOLATE</th></tr>

    </thead>
<?php
$producion_mas_efectiva=0;
$producion_total=0;
 foreach ($fabrica as $linea => $datos) {
    $producion_por_linea=0;
    $defectos_por_linea=0;
    $horas_por_lineas=0;
    $contador_dias_paradas=0;
    $producion_valida_linea=0;
        echo '<tr class="linea"><th colspan="3">' . $linea . '</th></tr>';
        echo '        <tr>
            <th>defectuosos</th>
            <th>parada</th>
            <th>produccion</th>
        </tr>';
        foreach ($datos as $dato) {
            echo '<tr>';            
            echo '<td>' . $dato["defectuosos"] . '</td>';
            echo '<td>' . $dato["parada"] . '</td>';
            echo '<td>' . $dato["produccion"] . '</td>';

            echo '</tr>';
            //calculo de la producion total pòr linea semanalmente
            $producion_por_linea+=$dato["produccion"];
            //saco el total de defectuosas
            $defectos_por_linea+=$dato["defectuosos"];
            //saco el totsl de las horas de parada
            $horas_por_lineas+=$dato["parada"];
            //compruebo si la parada es superior a dos horas
            if($dato["parada"]<=2){
                $contador_dias_paradas++;
            }
            //compruebo si la linea aactuyal es las mas prodductiva
            $producion_valida_linea=$producion_por_linea-$defectos_por_linea;
            if($producion_valida_linea>=$producion_mas_efectiva){
                $nombre_linea_mas_productiva=$linea;
                $producion_mas_efectiva=$producion_valida_linea;
            }
            //producion total
            $producion_total+=$producion_por_linea;
        }
        //imprimo la producion total de cada linea
        echo'<tr><th colspan="2">producion total</td><td>';
        echo $producion_por_linea.'</th></tr>';
        //imprimo el porcentaje de defectuosas
        $porcentaje_defec=number_format((($defectos_por_linea/$producion_por_linea)*100),2);
        echo'<tr><th colspan="2">% defectuosas</th><td>';
        echo $porcentaje_defec.'%</td></tr>';
        //imprimo la producion total de cada linea
        echo'<tr><th colspan="2">total horas</td><td>';
        echo $horas_por_lineas.'</th></tr>';
        if($contador_dias_paradas>=3){
        echo'<tr><th colspan="2">¿3 o mas dias con +2h parada?</td><td>';
        echo "Si,".$contador_dias_paradas.' horas</th></tr>';
        }else{
        echo'<tr><th colspan="2">¿ha estdao 3 o mas dias con +2h parada?</td><td>';
        echo "No,".$contador_dias_paradas.' horas</th></tr>';
        }

    }        
    //imprimo la linea mas productivo
        echo'<tr><th colspan="2">linea + productiva='.$nombre_linea_mas_productiva.'</td><td>';
        echo $producion_mas_efectiva.'</th></tr>';
    //producion total
        echo'<tr><th colspan="2">total producion</td><td>';
        echo $producion_total.'</th></tr>';
?>
</table>