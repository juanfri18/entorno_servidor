<<<<<<< HEAD
<?php
$alumnos = array(
    "Juan Francisco" => [
        "DWEC"=>[5.5,8,10],
        "DIW"=>[7,6,9],
        "DWES"=>[4,5,6],
        "PIDAW"=>[7,8,9],
        "DAW"=>[10,1,4],
        "IPE2"=>[5,6,7],
        "OpDAW"=>[8,9,10],
        "IngPr"=>[5,6,7]
    ],
    "Manuel" => [
        "DWEC"=>[5,5,6],
        "DIW"=>[7,9,4.5],
        "DWES"=>[1,2,3],
        "PIDAW"=>[4,5,6],
        "DAW"=>[7,8,9],
        "IPE2"=>[10,0,1],
        "OpDAW"=>[2,3,4],
        "IngPr"=>[5,6,7]
    ],
    "Paco" => [
        "DWEC"=>[3,6,0],
        "DIW"=>[5,6,7.5],
        "DWES"=>[7,6,5],
        "PIDAW"=>[4,3,2],
        "DAW"=>[1,0,1],
        "IPE2"=>[2,3,4],
        "OpDAW"=>[5,6,7],
        "IngPr"=>[8,9,10]
    ],
    "Sara" => [
        "DWEC"=>[2,8,1],
        "DIW"=>[8,9,10],
        "DWES"=>[10,9,8],
        "PIDAW"=>[7,6,5],
        "DAW"=>[4,3,2],
        "IPE2"=>[1,0,10],
        "OpDAW"=>[9,8,7],
        "IngPr"=>[6,5,4]
    ]
);

// Obtengo la lista de módulos (las claves del primer alumno)
$modulos = array_keys(reset($alumnos));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas de alumnos</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #444;
            padding: 6px 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .modulo {
            font-weight: bold;
            background-color: #dce6f2;
        }
        .nombre {
            background-color: #c6e0b4;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Notas de los alumnos por trimestre</h2>

<table>
    <tr>
        <th rowspan="2">Módulo</th>
        <?php 
        //genero la cabecera con los nombres de los alumnos
        foreach ($alumnos as $nombre => $modulos_alumno){
            echo'<th class="nombre" colspan="4">' .$nombre .'</th>';
        } 
       
    echo'</tr>';
    //por cada alumno genero 3 columnas con t1,t2,t3 y NM
    echo '<tr>';
        foreach ($alumnos as $nombre => $modulos_alumno){
            echo'<th>T1</th>';
            echo'<th>T2</th>';
            echo'<th>T3</th>';
            echo'<th>NM</th>';

        }
        
    echo'</tr>';
//genero la parte de la izquierda de la tabala con los nombres de los modulos
$modulos_alumno_suspenso=array();
$nota_media_mayor=0;
$nota_media_alumno=0;
foreach ($modulos as $modulo){
        echo'<tr>';
            echo'<td class="modulo">'. $modulo .'</td>';
            //geenro el resto de la tabla
            foreach ($alumnos as $nombre => $modulos_alumno){
                $notas = $modulos_alumno[$modulo]; 
                echo'<td>'.$notas[0] .'</td>';
                echo '<td>'.$notas[1]. '</td>';
                echo '<td>'. $notas[2]. '</td>';
                $nota_media=number_format((($notas[0]+$notas[1]+$notas[2])/3),1);
                echo '<td>'. $nota_media. '</td>';
            //guardo los modulos suspensos 
                if($nota_media<5){
                    $modulos_alumno_suspenso[$nombre][]=[
                        "modulo"=>$modulo,
                        "nota_media"=>$nota_media
                    ];
                }
               
           }               
            
        echo'</tr>';
    }
    ?>
</table>
<table border="1" style="margin-top:20px;">
    <tr><th>Alumno</th><th>Módulo Suspenso</th><th>Nota Media</th></tr>
    <?php 
    foreach($modulos_alumno_suspenso as $nombre=>$modulos_suspensos){
        foreach($modulos_suspensos as $suspenso){
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>{$suspenso['modulo']}</td>";
            echo "<td>{$suspenso['nota_media']}</td>";
            echo "</tr>";
        }
    }
    ?> 
</table>

<table border="1" style="margin-top:20px;">
    <tr><th>Alumno</th><th>Media</th></tr>
    <?php           
        $media_max = 0;
        $media_global = 0; 
        $array_medias = array();     
        $notas_progresivas=array();
        $asignaturas_mejoradas=array();
        foreach($alumnos as $alumno=>$modulos){
            $media_alu = 0;
            foreach($modulos as $modulo=> $notas){
                // Mostrar mejor alumno
                $media_alu += array_sum($notas)/3;
            // Media global del curso
                $media_global += array_sum($notas)/3;
                //mejora las notas?
                if($notas[0]<$notas[1] && $notas[1]<$notas[2]){
                    $asignaturas_mejoradas[$alumno][]=$modulo;
                }
            } 
            $media_alu = number_format(($media_alu / count($modulos)), 1);
            $array_medias[$alumno] = $media_alu;
            // Mostrar mejor alumno
            if($media_max < $media_alu){
                $media_max = $media_alu;
                $nombre_mejor_media = $alumno;
            }
         
        }

        // Mostrar mejor alumno
        echo "<p>El que mejor media tiene es: <strong>$nombre_mejor_media</strong> con una media de: <strong>$media_max</strong></p>";

        // Media global del curso
        $total_modulos = count($modulos);
        $total_alumnos = count($alumnos);
        $media_global = number_format(($media_global / ($total_modulos * $total_alumnos)), 2);
        echo "<p>La media de todo el curso es: <strong>$media_global</strong></p>";

        // Ordenar de mayor a menor
        arsort($array_medias);
echo "las medias de todos los alumnos son : <br>";
        // Mostrar tabla de medias
        foreach($array_medias as $nombre=>$nota_media){
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$nota_media</td>";
            echo "</tr>";
        }

    ?>
</table>
<table>
    <?php
    echo "<br>estos alumnos han mejorado en cuestion del curso estas asignaturas: <br>";
        //mostrar tabla con asignaturas en las cuales ha progresado cada alumno 
        foreach($asignaturas_mejoradas as $alumno => $modulos_mejorados){
            echo "<tr>";
            echo "<td>$alumno</td>";
            echo "<td>" . implode(", ", $modulos_mejorados) . "</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>
=======
<?php
$alumnos = array(
    "Juan Francisco" => [
        "DWEC"=>[5.5,8,10],
        "DIW"=>[7,6,9],
        "DWES"=>[4,5,6],
        "PIDAW"=>[7,8,9],
        "DAW"=>[10,1,4],
        "IPE2"=>[5,6,7],
        "OpDAW"=>[8,9,10],
        "IngPr"=>[5,6,7]
    ],
    "Manuel" => [
        "DWEC"=>[5,5,6],
        "DIW"=>[7,9,4.5],
        "DWES"=>[1,2,3],
        "PIDAW"=>[4,5,6],
        "DAW"=>[7,8,9],
        "IPE2"=>[10,0,1],
        "OpDAW"=>[2,3,4],
        "IngPr"=>[5,6,7]
    ],
    "Paco" => [
        "DWEC"=>[3,6,0],
        "DIW"=>[5,6,7.5],
        "DWES"=>[7,6,5],
        "PIDAW"=>[4,3,2],
        "DAW"=>[1,0,1],
        "IPE2"=>[2,3,4],
        "OpDAW"=>[5,6,7],
        "IngPr"=>[8,9,10]
    ],
    "Sara" => [
        "DWEC"=>[2,8,1],
        "DIW"=>[8,9,10],
        "DWES"=>[10,9,8],
        "PIDAW"=>[7,6,5],
        "DAW"=>[4,3,2],
        "IPE2"=>[1,0,10],
        "OpDAW"=>[9,8,7],
        "IngPr"=>[6,5,4]
    ]
);

// Obtengo la lista de módulos (las claves del primer alumno)
$modulos = array_keys(reset($alumnos));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas de alumnos</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #444;
            padding: 6px 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .modulo {
            font-weight: bold;
            background-color: #dce6f2;
        }
        .nombre {
            background-color: #c6e0b4;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Notas de los alumnos por trimestre</h2>

<table>
    <tr>
        <th rowspan="2">Módulo</th>
        <?php 
        //genero la cabecera con los nombres de los alumnos
        foreach ($alumnos as $nombre => $modulos_alumno){
            echo'<th class="nombre" colspan="4">' .$nombre .'</th>';
        } 
       
    echo'</tr>';
    //por cada alumno genero 3 columnas con t1,t2,t3 y NM
    echo '<tr>';
        foreach ($alumnos as $nombre => $modulos_alumno){
            echo'<th>T1</th>';
            echo'<th>T2</th>';
            echo'<th>T3</th>';
            echo'<th>NM</th>';

        }
        
    echo'</tr>';
//genero la parte de la izquierda de la tabala con los nombres de los modulos
$modulos_alumno_suspenso=array();
$nota_media_mayor=0;
$nota_media_alumno=0;
foreach ($modulos as $modulo){
        echo'<tr>';
            echo'<td class="modulo">'. $modulo .'</td>';
            //geenro el resto de la tabla
            foreach ($alumnos as $nombre => $modulos_alumno){
                $notas = $modulos_alumno[$modulo]; 
                echo'<td>'.$notas[0] .'</td>';
                echo '<td>'.$notas[1]. '</td>';
                echo '<td>'. $notas[2]. '</td>';
                $nota_media=number_format((($notas[0]+$notas[1]+$notas[2])/3),1);
                echo '<td>'. $nota_media. '</td>';
            //guardo los modulos suspensos 
                if($nota_media<5){
                    $modulos_alumno_suspenso[$nombre][]=[
                        "modulo"=>$modulo,
                        "nota_media"=>$nota_media
                    ];
                }
               
           }               
            
        echo'</tr>';
    }
    ?>
</table>
<table border="1" style="margin-top:20px;">
    <tr><th>Alumno</th><th>Módulo Suspenso</th><th>Nota Media</th></tr>
    <?php 
    foreach($modulos_alumno_suspenso as $nombre=>$modulos_suspensos){
        foreach($modulos_suspensos as $suspenso){
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>{$suspenso['modulo']}</td>";
            echo "<td>{$suspenso['nota_media']}</td>";
            echo "</tr>";
        }
    }
    ?> 
</table>

<table border="1" style="margin-top:20px;">
    <tr><th>Alumno</th><th>Media</th></tr>
    <?php           
        $media_max = 0;
        $media_global = 0; 
        $array_medias = array();     
        $notas_progresivas=array();
        $asignaturas_mejoradas=array();
        foreach($alumnos as $alumno=>$modulos){
            $media_alu = 0;
            foreach($modulos as $modulo=> $notas){
                // Mostrar mejor alumno
                $media_alu += array_sum($notas)/3;
            // Media global del curso
                $media_global += array_sum($notas)/3;
                //mejora las notas?
                if($notas[0]<$notas[1] && $notas[1]<$notas[2]){
                    $asignaturas_mejoradas[$alumno][]=$modulo;
                }
            } 
            $media_alu = number_format(($media_alu / count($modulos)), 1);
            $array_medias[$alumno] = $media_alu;
            // Mostrar mejor alumno
            if($media_max < $media_alu){
                $media_max = $media_alu;
                $nombre_mejor_media = $alumno;
            }
         
        }

        // Mostrar mejor alumno
        echo "<p>El que mejor media tiene es: <strong>$nombre_mejor_media</strong> con una media de: <strong>$media_max</strong></p>";

        // Media global del curso
        $total_modulos = count($modulos);
        $total_alumnos = count($alumnos);
        $media_global = number_format(($media_global / ($total_modulos * $total_alumnos)), 2);
        echo "<p>La media de todo el curso es: <strong>$media_global</strong></p>";

        // Ordenar de mayor a menor
        arsort($array_medias);
echo "las medias de todos los alumnos son : <br>";
        // Mostrar tabla de medias
        foreach($array_medias as $nombre=>$nota_media){
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$nota_media</td>";
            echo "</tr>";
        }

    ?>
</table>
<table>
    <?php
    echo "<br>estos alumnos han mejorado en cuestion del curso estas asignaturas: <br>";
        //mostrar tabla con asignaturas en las cuales ha progresado cada alumno 
        foreach($asignaturas_mejoradas as $alumno => $modulos_mejorados){
            echo "<tr>";
            echo "<td>$alumno</td>";
            echo "<td>" . implode(", ", $modulos_mejorados) . "</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
