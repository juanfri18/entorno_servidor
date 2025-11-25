<?php
$barbate = [
    "Zahara de los Atunes" => [
        "habitantes" => [
            ["Manuel Gonzalez", 23, "Masculino", "Universitario", 1009.37],
            ["Ernesto Valverde", 66, "Masculino", "ESO", 1000000]
        ]
    ],
    "Barbate" => [
        "habitantes" => [
            ["Juan Francisco Cortejosa", 21, "Masculino", "FP", 1297.92]
        ]
    ],
    "Zahora" => [
        "habitantes" => [
            ["Sergi Carrillo", 21, "Masculino", "Bachillerato", 652]
        ]
    ],
    "Los Caños de Meca" => [
        "habitantes" => [
            ["Alberto Lopez", 21, "Masculino", "Universitario", 1900]
        ]
    ],
    "La Muela" => [
        "habitantes" => [
            ["Blanca Cortejosa", 18, "Femenino", "Sin estudios", 0]
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Barbate</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px black solid;
            width: 60%;
        }
        th, td {
            border: 1px solid #444;
            padding: 6px 10px;
            text-align: center;
        }
        tbody td:first-child {
            background-color: #f7e6ffff;
            font-weight: bold;
            border: 1px black solid;

        }
        .municipio {
            font-weight: bold;
            background-color: #b0d4ff;
            text-align: center;
        }
        .datos {
            background-color: #c7eeae;
            font-weight: bold;
        }
        .apartado{
            background-color: #4b4b4bff;
            font-weight: bold;
            color:white;
            border: 1px #b0d4ff
        }
    </style>
</head>
<body>

<h2>Municipios de Barbate y habitantes en ellos</h2>

<?php   
$mayor_ingreso=0;
// array_search($valor,$array)=> te bsuca en el array el valor que elepases
//contadores para saber cuantos estudiantes de fp uni bacg ... hay en todos los municipios
$contador_fp=0;
$contador_eso=0;
$contador_bach=0;
$contador_sinEstudios=0;
$contador_uni=0;
//varaibles para recoger todos los salarios 
$ingresos_fp=0;
$ingresos_eso=0;
$ingresos_bach=0;
$ingresos_sinEstudios=0;
$ingresos_uni=0;
//persona mayor ingreso
$persona_mayor_ingreso=0;
//municipios con as personas de 65 años
$municipios_num_mas_65=0;

//recorro la matriz
foreach ($barbate as $municipio => $info) {


    //variables ejercicios
    $habitantes = $info["habitantes"];
    $media_edad = 0;
    $porcentaje_uni=0;
    $total_habitantes = count($habitantes);
    $ingreso=0;
    $personas_mayores_65=0;
    //tablas de cada municipio
    echo "<table>";
    echo '<thead>
            <tr><th colspan="5" class="municipio">'.$municipio.'</th></tr>
            <tr>
                <th class="datos">NOMBRE</th>
                <th class="datos">EDAD</th>
                <th class="datos">SEXO</th>
                <th class="datos">NIVEL ESTUDIOS</th>
                <th class="datos">INGRESOS</th>
            </tr>
          </thead>';
    echo "<tbody>";


        foreach ($habitantes as $habitante) {
                echo "<tr>";
                foreach ($habitante as $dato) {
                    echo "<td>$dato</td>";
                }
                echo "</tr>";

                
                // Sumar la edad
                $media_edad += $habitante[1]; 
                //si es universitario le sumo 1
                if($habitante[3]=="Universitario") {
                $porcentaje_uni++;
                }
                //recojo todos los ingreoso de cada habitante y los sumo
                $ingreso+=$habitante[4];
                //minetras se reoccre el array le voy dando valores a todas las variables contando asi todos los tipos
            switch($habitante[3]){
            case "Universitario":
                $contador_uni++;
                $ingresos_uni+=$habitante[4];
                break;
            case "FP":
                $contador_fp++;
                $ingresos_fp+=$habitante[4];

                break;
            case "Sin estudios":
                $contador_sinEstudios++;
                $ingresos_sinEstudios+=$habitante[4];

                break;    
            case "Bachillerato":
                $contador_bach++;
                $ingresos_bach+=$habitante[4];

                break;
            case "ESO":
                $contador_eso++;
                $ingresos_eso+=$habitante[4];

                break;  
            
            }
            //comprobacion de los ingresos de todos los habitantes buscando el que mas gana
            if($persona_mayor_ingreso<=$habitante[4]){
                $persona_mayor_ingreso=$habitante[4];
                $nombre_persona_mayor_ingreso=$habitante[0];
            }

            if($habitante[1]>=65){
                $personas_mayores_65++;
            }
            //fin segundo foreach
        }
        //ingreso_medio
        $ingreso_medio=$ingreso/$total_habitantes;
    //mayor ingreso medio
    if($mayor_ingreso<=$ingreso_medio){
        $mayor_ingreso=$ingreso_medio;
        $municipio_mayor_ingreso_medio=$municipio;

    }
    

    //actualizo y calcculo la edad media
    $media_edad_final = $media_edad / $total_habitantes;
    echo '<tr><th  colspan="3" class="apartado">MEDIA DE EDAD</th>';
    echo '<th colspan="2" class="apartado">'.round($media_edad_final,0).'</th></tr>';
    //porcenatej de universitarios
    echo '<tr><th  colspan="3" class="apartado">% universitarios</th>';
    echo '<th colspan="2" class="apartado">'.round((($porcentaje_uni/$total_habitantes)*100),2).'%</th></tr>';

    if ($municipios_num_mas_65<=$personas_mayores_65){
        $municipio_mas_65=$municipio;
        $municipios_num_mas_65=$personas_mayores_65;
    }


    echo "</tbody></table><br>";
    //fin primer foreach
}    
    //mayor ingreso medio de todos los municipios
    echo '<strong>MAYOR INGRESO MEDIO</strong><br>';
    echo $municipio_mayor_ingreso_medio." ".round($mayor_ingreso,2)."<br>";
//ingreosos medios
$ingreso_mediofp = $contador_fp ? $ingresos_fp / $contador_fp : 0;
$ingreso_medioEso = $contador_eso ? $ingresos_eso / $contador_eso : 0;
$ingreso_medioBach = $contador_bach ? $ingresos_bach / $contador_bach : 0;
$ingreso_medioUni = $contador_uni ? $ingresos_uni / $contador_uni : 0;
$ingreso_medioSinEstudio = $contador_sinEstudios ? $ingresos_sinEstudios / $contador_sinEstudios : 0;

//resultados ingresos por titulo
echo "el ingreso de las personas sin estudios es de $ingreso_medioSinEstudio<br>";
echo "el ingreso de las personas universitarias es de $ingreso_medioUni<br>";
echo "el ingreso de las personas con Bachillerato es de $ingreso_medioBach<br>";
echo "el ingreso de las personas con la ESO es de $ingreso_medioEso<br>";
echo "el ingreso de las personas con FP de $ingreso_mediofp<br>";
//resultado persona con mayorres ingresos
echo "La persona con mayor ingreso es $nombre_persona_mayor_ingreso conn unos ingresoso de : $persona_mayor_ingreso <br>";
//municipio con mas personas mayores de 65 años
echo "El municipio con mas personas mayores de 65 años es $municipio_mas_65 con $municipios_num_mas_65 personas <br>";

?>
<table>
    <tr>
        <td>PREPARACIÓN/NIVEL ESTUDIOS</td>
        <td>NUM PERSONAS </td>
    </tr>
    <tr>
        <td>FP</td>
        <td><?php echo $contador_fp ?></td>
    </tr>
    <tr>
        <td>BACH</td>
        <td><?php echo $contador_bach ?></td>
    </tr>
        <tr>
        <td>ESO</td>
        <td><?php echo $contador_eso ?></td>
    </tr>
    </tr>
        <tr>
        <td>UNIVERSIDAD</td>
        <td><?php echo $contador_uni ?></td>
    </tr>
    </tr>
        <tr>
        <td>SIN ESTUDIOS</td>
        <td><?php echo $contador_sinEstudios ?></td>
    </tr>            
</table>
</body>
</html>
