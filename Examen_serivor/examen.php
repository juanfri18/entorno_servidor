<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Examen</title>
    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        td, th {
            border: 1px solid black;
            padding: 5px 10px;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<table>
    
<?php
$teatro=[
    ["Viernes"=>[
        "Escenario_principal"=>[
            "Actuacion 1"=>["artista"=>"brad Pit","Hora_actuacion"=>"23:00","Num_asistencia"=>2355,"Genero_musical"=>"Sonata"],
            "Actuacion 2"=>["artista"=>"Juanfri","Hora_actuacion"=>"01:00","Num_asistencia"=>10000,"Genero_musical"=>"bachata"]
        ],
        "Escenario_secundario"=>[
            "Actuacion 1"=>["artista"=>"Cristiano","Hora_actuacion"=>"22:00","Num_asistencia"=>2500,"Genero_musical"=>"furbo"],
            "Actuacion 2"=>["artista"=>"messi","Hora_actuacion"=>"21:00","Num_asistencia"=>2499,"Genero_musical"=>"tenis"],
            "Actuacion 3"=>["artista"=>"federer","Hora_actuacion"=>"21:00","Num_asistencia"=>2499,"Genero_musical"=>"criptos"]
        ]
    ]],
    [    "Sabado"=>[
        "Escenario_principal"=>[
            "Actuacion 1"=>["artista"=>"anceloti","Hora_actuacion"=>"23:00","Num_asistencia"=>100,"Genero_musical"=>"ingles"],
            "Actuacion 2"=>["artista"=>"zidane","Hora_actuacion"=>"01:00","Num_asistencia"=>2000,"Genero_musical"=>"clase"]

        ],
                "Escenario_secundario"=>[
            "Actuacion 1"=>["artista"=>"nadal","Hora_actuacion"=>"22:00","Num_asistencia"=>25000,"Genero_musical"=>"coaching"],
            "Actuacion 2"=>["artista"=>"federer","Hora_actuacion"=>"21:00","Num_asistencia"=>24999,"Genero_musical"=>"criptos"]
        ]
    ]]
];
$dia_mayor_asistencia=0;
$asistencia_total=0;
$artista_mayor_asistencia=0;
$numero_actuaciones=0;
$nombres_artistas_distintos=array();
foreach($teatro as $dias){
    $asistencia_por_dia=0;
    foreach($dias as $dia=>$escenarios){
        echo '<tr ><td colspan="4">'.$dia."</td></tr>";
       foreach($escenarios as $nombre_escenario=>$actuaciones){
        //cueno todas las actuaciones qeu hubo en todo el festival
        $numero_actuaciones+=count($actuaciones);

            echo '<tr ><td colspan="4">'.$nombre_escenario."</td></tr>";
            foreach($actuaciones as $nombre_actuacion=>$datos){
                echo '<tr ><td colspan="4">'.$nombre_actuacion."</td></tr>";
                echo"<tr>";
                
                foreach($datos as $nom_dato=>$dato){
                    //guardo el nombre del artitta
                    if($nom_dato=="artista"){
                        $nombre_artista=$dato;
                        if(!in_array($dato,$nombres_artistas_distintos)){
                            $nombres_artistas_distintos[]=$dato;
                        }
                    }
              
                echo '<td>'.$nom_dato."</td>";
                echo '<td>'.$dato."</td>";
                //compruebo si es el dato que busco y si es asi se lo sumo a la variable
                if($nom_dato=="Num_asistencia"){
                    $asistencia_por_dia=$asistencia_por_dia+$dato; 
                    $asistencia_total=$asistencia_total+$dato;
     
                    //compruebo si el nuero de asistentes es mayor qeu el ultimo mas grande
                    if($dato>=$artista_mayor_asistencia){
                        $artista_mayor_asistencia=$dato;
                        $nombre_artista_mayor_asistencia=$nombre_artista;
                    }
                }
                }

            }
            echo"</tr>";



       }
              
    echo '<tr ><td colspan="3">Numero Asistencia</td>';
            echo '<td>'.$asistencia_por_dia.'</td></tr>';
            //compruebo si este dia ha sido el dia con mayor asistencia

            if($asistencia_por_dia>=$dia_mayor_asistencia){
                $dia_mayor_asistencia=$asistencia_por_dia;
                $nom_dia_mayor_asistencia=$dia;
            }
        }  
}

echo "</table>";

echo "<br>El dia con mayor asistencia fue el $nom_dia_mayor_asistencia con un total de $dia_mayor_asistencia personas asistentes <br>";
                        
echo " <br>El artista mas visto es $nombre_artista_mayor_asistencia con un total de asistencias de $artista_mayor_asistencia <br>";

echo " <br>numero total actuaciones: $numero_actuaciones y hemos contado con ".count($nombres_artistas_distintos)." artistas diferentes  <br> ";
$asistencia_media=$asistencia_total/count($nombres_artistas_distintos);
echo "<br> La asistenia total es de $asistencia_total asistentes en todo el festival con una media $asistencia_media por actuacion<br>  ";


//ejercicio 3
function ejercicio3($teatro){
    $contador=0;
    echo"<table>";
foreach($teatro as $dias){
    foreach($dias as $dia=>$escenarios){
       foreach($escenarios as $nombre_escenario=>$actuaciones){

            foreach($actuaciones as $nombre_actuacion=>$datos){
                if($datos["Num_asistencia"]>=1000){
                    $contador++;
                echo'<tr ><td colspan="3">'.$datos["artista"].'<td>'.$datos["Num_asistencia"].'</td></td></tr>';

                }
            }

                }
            }
        } 
            echo"</table>";
 
}
ejercicio3($teatro);




//ejercicio 5
function ejercicio5($teatro){
    $contador=0;
    echo"<table>";
foreach($teatro as $dias){
    foreach($dias as $dia=>$escenarios){
       foreach($escenarios as $nombre_escenario=>$actuaciones){

            foreach($actuaciones as $nombre_actuacion=>$datos){
                if($datos["Num_asistencia"]>=1000){
                    $contador++;
                echo'<tr ><td colspan="3">'.$datos["artista"].'<td>'.$datos["Num_asistencia"].'</td></td></tr>';

                }
            }

                }
            }
        } 
            echo"</table>";
 
}
ejercicio5($teatro);


//ejercicio 6
function ejercicio6($teatro){
$artistas_mas_1000=array();


foreach($teatro as $dias){
    foreach($dias as $dia=>$escenarios){
       foreach($escenarios as $nombre_escenario=>$actuaciones){

            foreach($actuaciones as $nombre_actuacion=>$datos){
                if(!in_array($datos["artista"],$artistas_mas_1000)){
                    $dato_nombre=$datos["artista"];
                    $dato_asistencia=$datos["Num_asistencia"];
                    array_push($artistas_mas_1000,[$dato_nombre=>$dato_asistencia]);
                }
            }

                }
            }
        } 
            
krsort($artistas_mas_1000);    
echo"<table>";
        echo'<tr ><td>.$nombre.<td>.$asistencia.</td></td></tr>';

foreach($artistas_mas_1000 as $nombre=>$asistencia){
        echo'<tr ><td>'.$nombre.'<td>'.$asistencia.'</td></td></tr>';

}
//echo'<tr ><td>total artistas<td>'.$asistencia.'</td></td></tr>';
echo"</table>";
}
ejercicio6($teatro);
?>
