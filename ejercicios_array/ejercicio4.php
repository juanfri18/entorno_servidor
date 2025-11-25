<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        table {
            border-collapse: collapse;
            border-top: 4px solid black;
            border-bottom: 4px solid black;
            text-align: left;
            margin: 30px auto;            
            border-left: none;
            border-right: none;
            width: 90%;
        }
        td, th {
            border: none;
            padding: 10px;
        }
        thead {
            border-top: 4px solid black;
            border-bottom: 4px solid black;
            background-color: #775f81ff;
            color: white;
        }
        .colorVerde { background-color: #00a156ff; color: white; }
        .colorNaranja { background-color: #e99700ff; color: white; }
        .filaPar { background-color: #acacacff; color: black; }
        .filaImpar { background-color: #ffffff; color: black; }
    </style>
</head>
<body>

    <div>       
        <table>
            <thead>
                <tr>
                    <th class="colorVerde">Fila</th>
                    <th class="colorNaranja">Nombre</th>
                    <th class="colorNaranja">Peso</th>
                    <th class="colorNaranja">Color</th>
                    <th class="colorNaranja">Edad</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $mascotas = [
                    0 => ["nombre"=>"Pepe","peso"=>4.5,"color"=>"marrón","edad"=>12],
                    1 => ["nombre"=>"Sparky","peso"=>3,"color"=>"Blanco","edad"=>2],
                    2 => ["nombre"=>"Tobby","peso"=>7.2,"color"=>"Beige","edad"=>8],
                    3 => ["nombre"=>"Bigotes","peso"=>4,"color"=>"Negro","edad"=>9],
                    4 => ["nombre"=>"Ricky","peso"=>0.1,"color"=>"Verde","edad"=>2]
                ];
                $buscadorId3 = [];
                $buscadorSparky = [];
                // valor muy grande para empezar
                $menos_peso = 1000; 
                $id_menor_peso = null;
                $datos_menos_peso = [];

                foreach ($mascotas as $id => $datos_mascota) {
                    // Fila par o impar
                    $claseFila = ($id % 2 == 0) ? 'filaPar' : 'filaImpar';
                    
                    echo "<tr class='$claseFila'>";
                    echo "<td class='colorVerde'>$id</td>";

                    foreach ($datos_mascota as $dato) {
                        echo "<td>$dato</td>";
                    }
                    echo "</tr>";

                    // Mascota con ID 3 → guardar peso
                    if ($id == 3) {
                        $buscadorId3[$id] = $datos_mascota['peso'];
                    }

                    // Mascota llamada Sparky
                    if ($datos_mascota['nombre'] == "Sparky") {
                        $buscadorSparky[$id] = $datos_mascota;
                    }

                    // Mascota con menos peso
                    if ($datos_mascota['peso'] < $menos_peso) {
                        $menos_peso = $datos_mascota['peso'];
                        $datos_menos_peso = $datos_mascota;
                        $id_menor_peso = $id;
                    }
                }
                ?>
            </tbody>
        </table>               
        
        <?php
        echo $mascotas[0];
        ?>

    </div>

    <div>       
        <!-- Segunda tabla con los resultados filtrados -->
        <table>
            <thead>
                <tr>
                    <th class="colorVerde">Fila</th>
                    <th class="colorNaranja">Nombre</th>
                    <th class="colorNaranja">Peso</th>
                    <th class="colorNaranja">Color</th>
                    <th class="colorNaranja">Edad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Peso de la mascota con id=3
                foreach ($buscadorId3 as $id => $peso) {
                    echo "<tr class='filaPar'>
                            <td class='colorVerde'>ID=3</td>
                            <td colspan='4'>Peso: $peso kg</td>
                          </tr>";
                }

                // Datos de Sparky
                foreach ($buscadorSparky as $id => $datos) {
                    echo "<tr class='filaImpar'>";
                    echo "<td class='colorVerde'>$id</td>";
                    foreach ($datos as $valor) {
                        echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }

                // Mascota con menor peso
                echo "<tr class='filaPar'>
                        <td class='colorVerde'>$id_menor_peso</td>
                        <td>{$datos_menos_peso['nombre']}</td>
                        <td>{$datos_menos_peso['peso']}</td>
                        <td>{$datos_menos_peso['color']}</td>
                        <td>{$datos_menos_peso['edad']}</td>
                      </tr>";
                      
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
