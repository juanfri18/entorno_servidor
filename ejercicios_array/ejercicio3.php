<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        table {
            border-collapse: collapse;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            margin: 30px auto;
            border: 2px solid black;
            width: 90%;
        }
        td {
            border: none;
            padding: 10px;
            text-align: center;
        } th {
            border: none;
            padding: 10px;
            text-align: center;
            background-color: #775f81ff;
            color: white;
        }
        thead {
            background-color: #775f81ff;
            color: white;
        }
        .filaPar {
            background-color: #acacacff;
        }
        .filaImpar {
            background-color: #ffffffff;
        }
    </style>
</head>
<body>

    <div>       
        <table>
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Matemáticas</th>
                    <th>Lengua</th>
                    <th>Ciencias Naturales</th>
                    <th>Geografía</th>
                    <th>Media</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $notas = [
                    "Antonio" => [5, 8.3, 9, 7],
                    "Ana" => [8, 7, 4.5, 9],
                    "Benito" => [9, 6.75, 9, 3.1],
                    "Clara" => [7, 8, 7.5, 9],
                    "David" => [6, 5.5, 7, 6],
                    "Eva" => [9, 8, 8.5, 9],
                    "Luis" => [4, 5, 6, 7],
                    "María" => [10, 9.5, 9, 10],
                    "Sergio" => [6, 7, 5.5, 6.5],
                    "Julia" => [7, 8.5, 9, 7.5]
                ];

                $numero = 0;
                foreach ($notas as $nombre => $nota) {
                    $clase = ($numero % 2 == 0) ? 'filaPar' : 'filaImpar';
                    echo "<tr class='$clase'>";
                    echo "<th>$nombre</th>";
                    $suma = 0;
                    foreach ($nota as $num) {
                        echo "<td>$num</td>";
                        $suma += $num;
                    }
                    $media = $suma / count($nota);
                    echo "<td>" . number_format($media, 2) . "</td>";
                    echo "</tr>";
                    $numero++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <div>       
        <table>
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Matemáticas</th>
                    <th>Lengua</th>
                    <th>Ciencias Naturales</th>
                    <th>Geografía</th>
                    <th>Media</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nombre_recogido = "Benito";
                foreach ($notas as $nombre => $nota) {
                    if ($nombre_recogido == $nombre) {
                        $suma = array_sum($nota);
                        $media = $suma / count($nota);
                        echo "<tr>";
                        echo "<th>$nombre</th>";
                        foreach ($nota as $num) {
                            echo "<td>$num</td>";
                        }
                        echo "<td>" . number_format($media, 2) . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>      

</body>
</html>
