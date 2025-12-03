<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Examen - Festival Sonidos del Sur</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 15px 0;
            width: 80%;
        }
        td, th {
            border: 1px solid black;
            padding: 6px 10px;
        }
        th {
            background-color: #e0e0e0;
        }
        h2 {
            margin-top: 40px;
        }
    </style>
</head>
<body>

<?php
$teatro = [
    ["Viernes" => [
        "Escenario_principal" => [
            "Actuacion 1" => ["artista" => "Brad Pitt", "Hora_actuacion" => "23:00", "Num_asistencia" => 2355, "Genero_musical" => "Sonata"],
            "Actuacion 2" => ["artista" => "Juanfri", "Hora_actuacion" => "01:00", "Num_asistencia" => 10000, "Genero_musical" => "Bachata"]
        ],
        "Escenario_secundario" => [
            "Actuacion 1" => ["artista" => "Cristiano", "Hora_actuacion" => "22:00", "Num_asistencia" => 2500, "Genero_musical" => "Furbo"],
            "Actuacion 2" => ["artista" => "Messi", "Hora_actuacion" => "21:00", "Num_asistencia" => 2499, "Genero_musical" => "Tenis"],
            "Actuacion 3" => ["artista" => "Federer", "Hora_actuacion" => "21:00", "Num_asistencia" => 2499, "Genero_musical" => "Criptos"]
        ]
    ]],
    ["Sabado" => [
        "Escenario_principal" => [
            "Actuacion 1" => ["artista" => "Ancelotti", "Hora_actuacion" => "23:00", "Num_asistencia" => 100, "Genero_musical" => "Inglés"],
            "Actuacion 2" => ["artista" => "Zidane", "Hora_actuacion" => "01:00", "Num_asistencia" => 2000, "Genero_musical" => "Clase"]
        ],
        "Escenario_secundario" => [
            "Actuacion 1" => ["artista" => "Nadal", "Hora_actuacion" => "22:00", "Num_asistencia" => 25000, "Genero_musical" => "Coaching"],
            "Actuacion 2" => ["artista" => "Federer", "Hora_actuacion" => "21:00", "Num_asistencia" => 24999, "Genero_musical" => "Criptos"]
        ]
    ]],
    ["Domingo" => [
        "Escenario_principal" => [
            "Actuacion 1" => ["artista" => "Rihanna", "Hora_actuacion" => "23:00", "Num_asistencia" => 18000, "Genero_musical" => "Pop"],
            "Actuacion 2" => ["artista" => "Beyonce", "Hora_actuacion" => "01:00", "Num_asistencia" => 22000, "Genero_musical" => "Soul"]
        ],
        "Escenario_secundario" => [
            "Actuacion 1" => ["artista" => "Eminem", "Hora_actuacion" => "22:00", "Num_asistencia" => 27000, "Genero_musical" => "Rap"],
            "Actuacion 2" => ["artista" => "Adele", "Hora_actuacion" => "21:00", "Num_asistencia" => 26000, "Genero_musical" => "Pop"]
        ]
    ]]
];


// =========================================================
// EJERCICIO 1 - Mostrar todas las actuaciones + totales por día
// =========================================================
echo "<h2>1️⃣ Actuaciones por día y escenario</h2>";

$dia_mayor_asistencia = 0;
$nom_dia_mayor_asistencia = "";
$asistencia_total = 0;
$numero_actuaciones = 0;
$nombres_artistas_distintos = [];

foreach ($teatro as $dias) {
    foreach ($dias as $dia => $escenarios) {
        $asistencia_por_dia = 0;
        echo "<h3>$dia</h3>";

        foreach ($escenarios as $nombre_escenario => $actuaciones) {
            echo "<h4>$nombre_escenario</h4>";
            echo "<table><tr><th>Artista</th><th>Hora</th><th>Género</th><th>Asistentes</th></tr>";

            foreach ($actuaciones as $datos) {
                echo "<tr>";
                echo "<td>{$datos["artista"]}</td>";
                echo "<td>{$datos["Hora_actuacion"]}</td>";
                echo "<td>{$datos["Genero_musical"]}</td>";
                echo "<td>{$datos["Num_asistencia"]}</td>";
                echo "</tr>";

                $asistencia_por_dia += $datos["Num_asistencia"];
                $asistencia_total += $datos["Num_asistencia"];
                $numero_actuaciones++;
                if (!in_array($datos["artista"], $nombres_artistas_distintos))
                    $nombres_artistas_distintos[] = $datos["artista"];
            }

            echo "</table>";
        }

        echo "<strong>Total asistentes $dia: $asistencia_por_dia</strong><br><br>";

        if ($asistencia_por_dia > $dia_mayor_asistencia) {
            $dia_mayor_asistencia = $asistencia_por_dia;
            $nom_dia_mayor_asistencia = $dia;
        }
    }
}

echo "<p><strong>➡️ Día con mayor asistencia:</strong> $nom_dia_mayor_asistencia ($dia_mayor_asistencia asistentes)</p>";


// =========================================================
// EJERCICIO 2 - Artista con más asistentes
// =========================================================
echo "<h2>2️⃣ Artista con más asistentes</h2>";

$artista_mas_visto = "";
$max_asistencia = 0;
$info_artista = [];

foreach ($teatro as $dias) {
    foreach ($dias as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $datos) {
                if ($datos["Num_asistencia"] > $max_asistencia) {
                    $max_asistencia = $datos["Num_asistencia"];
                    $artista_mas_visto = $datos["artista"];
                    $info_artista = [
                        "dia" => $dia,
                        "escenario" => $escenario,
                        "genero" => $datos["Genero_musical"]
                    ];
                }
            }
        }
    }
}
echo "<p>🎤 El artista más visto fue <strong>$artista_mas_visto</strong> con $max_asistencia asistentes.<br>
Día: {$info_artista["dia"]} | Escenario: {$info_artista["escenario"]} | Género: {$info_artista["genero"]}</p>";


// =========================================================
// EJERCICIO 3 - Resumen por género musical
// =========================================================
echo "<h2>3️⃣ Resumen por género musical</h2>";

$generos = [];

foreach ($teatro as $dias) {
    foreach ($dias as $escenarios) {
        foreach ($escenarios as $actuaciones) {
            foreach ($actuaciones as $datos) {
                $g = $datos["Genero_musical"];
                if (!isset($generos[$g])) {
                    $generos[$g] = ["actuaciones" => 0, "asistentes" => 0];
                }
                $generos[$g]["actuaciones"]++;
                $generos[$g]["asistentes"] += $datos["Num_asistencia"];
            }
        }
    }
}

echo "<table><tr><th>Género</th><th>Nº Actuaciones</th><th>Asistentes Totales</th><th>Media</th></tr>";
foreach ($generos as $genero => $info) {
    $media = round($info["asistentes"] / $info["actuaciones"], 2);
    echo "<tr><td>$genero</td><td>{$info["actuaciones"]}</td><td>{$info["asistentes"]}</td><td>$media</td></tr>";
}
echo "</table>";


// =========================================================
// EJERCICIO 4 - Nº total de actuaciones y artistas únicos
// =========================================================
echo "<h2>4️⃣ Totales</h2>";
echo "<p>Total de actuaciones: $numero_actuaciones<br>";
echo "Artistas distintos: " . count($nombres_artistas_distintos) . "</p>";


// =========================================================
// EJERCICIO 5 - Buscar artista por nombre
// =========================================================
function ejercicio5($teatro, $nombre_buscado){
    $encontrado = false;
    echo "<h2>5️⃣ Búsqueda del artista '$nombre_buscado'</h2>";
    echo "<table><tr><th>Día</th><th>Escenario</th><th>Hora</th><th>Género</th><th>Asistentes</th></tr>";

    foreach ($teatro as $dias) {
        foreach ($dias as $dia => $escenarios) {
            foreach ($escenarios as $escenario => $actuaciones) {
                foreach ($actuaciones as $datos) {
                    if (strcasecmp($datos["artista"], $nombre_buscado) == 0) {
                        echo "<tr><td>$dia</td><td>$escenario</td><td>{$datos["Hora_actuacion"]}</td><td>{$datos["Genero_musical"]}</td><td>{$datos["Num_asistencia"]}</td></tr>";
                        $encontrado = true;
                    }
                }
            }
        }
    }

    echo "</table>";
    if (!$encontrado) echo "<p>❌ No se encontró al artista '$nombre_buscado'.</p>";
}
ejercicio5($teatro, "Federer");


// =========================================================
// EJERCICIO 6 - Total y media de asistentes
// =========================================================
echo "<h2>6️⃣ Asistencias globales</h2>";
$media_total = round($asistencia_total / $numero_actuaciones, 2);
echo "<p>Asistencia total: <strong>$asistencia_total</strong><br>Media por actuación: <strong>$media_total</strong></p>";


// =========================================================
// EJERCICIO 7 - Artistas con más de 1000 asistentes
// =========================================================
echo "<h2>7️⃣ Artistas con más de 1000 asistentes</h2>";
$artistas_mas_1000 = [];

foreach ($teatro as $dias) {
    foreach ($dias as $escenarios) {
        foreach ($escenarios as $actuaciones) {
            foreach ($actuaciones as $datos) {
                if ($datos["Num_asistencia"] > 1000)
                    $artistas_mas_1000[$datos["artista"]] = $datos["Num_asistencia"];
            }
        }
    }
}

arsort($artistas_mas_1000);
echo "<table><tr><th>Artista</th><th>Asistentes</th></tr>";
foreach ($artistas_mas_1000 as $nombre => $asistencia) {
    echo "<tr><td>$nombre</td><td>$asistencia</td></tr>";
}
echo "</table>";
echo "<p>Total artistas con más de 1000 asistentes: " . count($artistas_mas_1000) . "</p>";


// =========================================================
// EJERCICIO 8 - Escenarios ordenados por asistencia en un día
// =========================================================
echo "<h2>8️⃣ Escenarios ordenados por asistencia (ejemplo: Sábado)</h2>";

$dia_objetivo = "Sabado";
$escenarios_orden = [];

foreach ($teatro as $dias) {
    if (isset($dias[$dia_objetivo])) {
        foreach ($dias[$dia_objetivo] as $escenario => $actuaciones) {
            $suma = 0;
            foreach ($actuaciones as $datos) {
                $suma += $datos["Num_asistencia"];
            }
            $escenarios_orden[$escenario] = $suma;
        }
    }
}

arsort($escenarios_orden);
echo "<table><tr><th>Escenario</th><th>Asistentes</th></tr>";
foreach ($escenarios_orden as $escenario => $asistencia) {
    echo "<tr><td>$escenario</td><td>$asistencia</td></tr>";
}
echo "</table>";


// =========================================================
// EJERCICIO 9 - Tabla resumen por día y hora
// =========================================================
echo "<h2>9️⃣ Tabla resumen ordenada por día y hora</h2>";

$tabla_resumen = [];
foreach ($teatro as $dias) {
    foreach ($dias as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $datos) {
                $tabla_resumen[] = [
                    "dia" => $dia,
                    "escenario" => $escenario,
                    "hora" => $datos["Hora_actuacion"],
                    "artista" => $datos["artista"],
                    "genero" => $datos["Genero_musical"],
                    "asistentes" => $datos["Num_asistencia"]
                ];
            }
        }
    }
}

usort($tabla_resumen, fn($a,$b)=>[$a["dia"],$a["hora"]] <=> [$b["dia"],$b["hora"]]);

echo "<table><tr><th>Día</th><th>Escenario</th><th>Hora</th><th>Artista</th><th>Género</th><th>Asistentes</th></tr>";
foreach ($tabla_resumen as $fila) {
    echo "<tr><td>{$fila["dia"]}</td><td>{$fila["escenario"]}</td><td>{$fila["hora"]}</td><td>{$fila["artista"]}</td><td>{$fila["genero"]}</td><td>{$fila["asistentes"]}</td></tr>";
}
echo "</table>";


// =========================================================
// EJERCICIO 10 - Géneros con media < 900
// =========================================================
echo "<h2>🔟 Géneros con asistencia media inferior a 900</h2>";

echo "<table><tr><th>Género</th><th>Actuaciones</th><th>Asistentes totales</th><th>Media</th></tr>";
foreach ($generos as $genero => $info) {
    $media = round($info["asistentes"] / $info["actuaciones"], 2);
    if ($media < 900) {
        echo "<tr><td>$genero</td><td>{$info["actuaciones"]}</td><td>{$info["asistentes"]}</td><td>$media</td></tr>";
    }
}
echo "</table>";
?>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Examen - Festival Sonidos del Sur</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 15px 0;
            width: 80%;
        }
        td, th {
            border: 1px solid black;
            padding: 6px 10px;
        }
        th {
            background-color: #e0e0e0;
        }
        h2 {
            margin-top: 40px;
        }
    </style>
</head>
<body>

<?php
$teatro = [
    ["Viernes" => [
        "Escenario_principal" => [
            "Actuacion 1" => ["artista" => "Brad Pitt", "Hora_actuacion" => "23:00", "Num_asistencia" => 2355, "Genero_musical" => "Sonata"],
            "Actuacion 2" => ["artista" => "Juanfri", "Hora_actuacion" => "01:00", "Num_asistencia" => 10000, "Genero_musical" => "Bachata"]
        ],
        "Escenario_secundario" => [
            "Actuacion 1" => ["artista" => "Cristiano", "Hora_actuacion" => "22:00", "Num_asistencia" => 2500, "Genero_musical" => "Furbo"],
            "Actuacion 2" => ["artista" => "Messi", "Hora_actuacion" => "21:00", "Num_asistencia" => 2499, "Genero_musical" => "Tenis"],
            "Actuacion 3" => ["artista" => "Federer", "Hora_actuacion" => "21:00", "Num_asistencia" => 2499, "Genero_musical" => "Criptos"]
        ]
    ]],
    ["Sabado" => [
        "Escenario_principal" => [
            "Actuacion 1" => ["artista" => "Ancelotti", "Hora_actuacion" => "23:00", "Num_asistencia" => 100, "Genero_musical" => "Inglés"],
            "Actuacion 2" => ["artista" => "Zidane", "Hora_actuacion" => "01:00", "Num_asistencia" => 2000, "Genero_musical" => "Clase"]
        ],
        "Escenario_secundario" => [
            "Actuacion 1" => ["artista" => "Nadal", "Hora_actuacion" => "22:00", "Num_asistencia" => 25000, "Genero_musical" => "Coaching"],
            "Actuacion 2" => ["artista" => "Federer", "Hora_actuacion" => "21:00", "Num_asistencia" => 24999, "Genero_musical" => "Criptos"]
        ]
    ]],
    ["Domingo" => [
        "Escenario_principal" => [
            "Actuacion 1" => ["artista" => "Rihanna", "Hora_actuacion" => "23:00", "Num_asistencia" => 18000, "Genero_musical" => "Pop"],
            "Actuacion 2" => ["artista" => "Beyonce", "Hora_actuacion" => "01:00", "Num_asistencia" => 22000, "Genero_musical" => "Soul"]
        ],
        "Escenario_secundario" => [
            "Actuacion 1" => ["artista" => "Eminem", "Hora_actuacion" => "22:00", "Num_asistencia" => 27000, "Genero_musical" => "Rap"],
            "Actuacion 2" => ["artista" => "Adele", "Hora_actuacion" => "21:00", "Num_asistencia" => 26000, "Genero_musical" => "Pop"]
        ]
    ]]
];


// =========================================================
// EJERCICIO 1 - Mostrar todas las actuaciones + totales por día
// =========================================================
echo "<h2>1️⃣ Actuaciones por día y escenario</h2>";

$dia_mayor_asistencia = 0;
$nom_dia_mayor_asistencia = "";
$asistencia_total = 0;
$numero_actuaciones = 0;
$nombres_artistas_distintos = [];

foreach ($teatro as $dias) {
    foreach ($dias as $dia => $escenarios) {
        $asistencia_por_dia = 0;
        echo "<h3>$dia</h3>";

        foreach ($escenarios as $nombre_escenario => $actuaciones) {
            echo "<h4>$nombre_escenario</h4>";
            echo "<table><tr><th>Artista</th><th>Hora</th><th>Género</th><th>Asistentes</th></tr>";

            foreach ($actuaciones as $datos) {
                echo "<tr>";
                echo "<td>{$datos["artista"]}</td>";
                echo "<td>{$datos["Hora_actuacion"]}</td>";
                echo "<td>{$datos["Genero_musical"]}</td>";
                echo "<td>{$datos["Num_asistencia"]}</td>";
                echo "</tr>";

                $asistencia_por_dia += $datos["Num_asistencia"];
                $asistencia_total += $datos["Num_asistencia"];
                $numero_actuaciones++;
                if (!in_array($datos["artista"], $nombres_artistas_distintos))
                    $nombres_artistas_distintos[] = $datos["artista"];
            }

            echo "</table>";
        }

        echo "<strong>Total asistentes $dia: $asistencia_por_dia</strong><br><br>";

        if ($asistencia_por_dia > $dia_mayor_asistencia) {
            $dia_mayor_asistencia = $asistencia_por_dia;
            $nom_dia_mayor_asistencia = $dia;
        }
    }
}

echo "<p><strong>➡️ Día con mayor asistencia:</strong> $nom_dia_mayor_asistencia ($dia_mayor_asistencia asistentes)</p>";


// =========================================================
// EJERCICIO 2 - Artista con más asistentes
// =========================================================
echo "<h2>2️⃣ Artista con más asistentes</h2>";

$artista_mas_visto = "";
$max_asistencia = 0;
$info_artista = [];

foreach ($teatro as $dias) {
    foreach ($dias as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $datos) {
                if ($datos["Num_asistencia"] > $max_asistencia) {
                    $max_asistencia = $datos["Num_asistencia"];
                    $artista_mas_visto = $datos["artista"];
                    $info_artista = [
                        "dia" => $dia,
                        "escenario" => $escenario,
                        "genero" => $datos["Genero_musical"]
                    ];
                }
            }
        }
    }
}
echo "<p>🎤 El artista más visto fue <strong>$artista_mas_visto</strong> con $max_asistencia asistentes.<br>
Día: {$info_artista["dia"]} | Escenario: {$info_artista["escenario"]} | Género: {$info_artista["genero"]}</p>";


// =========================================================
// EJERCICIO 3 - Resumen por género musical
// =========================================================
echo "<h2>3️⃣ Resumen por género musical</h2>";

$generos = [];

foreach ($teatro as $dias) {
    foreach ($dias as $escenarios) {
        foreach ($escenarios as $actuaciones) {
            foreach ($actuaciones as $datos) {
                $g = $datos["Genero_musical"];
                if (!isset($generos[$g])) {
                    $generos[$g] = ["actuaciones" => 0, "asistentes" => 0];
                }
                $generos[$g]["actuaciones"]++;
                $generos[$g]["asistentes"] += $datos["Num_asistencia"];
            }
        }
    }
}

echo "<table><tr><th>Género</th><th>Nº Actuaciones</th><th>Asistentes Totales</th><th>Media</th></tr>";
foreach ($generos as $genero => $info) {
    $media = round($info["asistentes"] / $info["actuaciones"], 2);
    echo "<tr><td>$genero</td><td>{$info["actuaciones"]}</td><td>{$info["asistentes"]}</td><td>$media</td></tr>";
}
echo "</table>";


// =========================================================
// EJERCICIO 4 - Nº total de actuaciones y artistas únicos
// =========================================================
echo "<h2>4️⃣ Totales</h2>";
echo "<p>Total de actuaciones: $numero_actuaciones<br>";
echo "Artistas distintos: " . count($nombres_artistas_distintos) . "</p>";


// =========================================================
// EJERCICIO 5 - Buscar artista por nombre
// =========================================================
function ejercicio5($teatro, $nombre_buscado){
    $encontrado = false;
    echo "<h2>5️⃣ Búsqueda del artista '$nombre_buscado'</h2>";
    echo "<table><tr><th>Día</th><th>Escenario</th><th>Hora</th><th>Género</th><th>Asistentes</th></tr>";

    foreach ($teatro as $dias) {
        foreach ($dias as $dia => $escenarios) {
            foreach ($escenarios as $escenario => $actuaciones) {
                foreach ($actuaciones as $datos) {
                    if (strcasecmp($datos["artista"], $nombre_buscado) == 0) {
                        echo "<tr><td>$dia</td><td>$escenario</td><td>{$datos["Hora_actuacion"]}</td><td>{$datos["Genero_musical"]}</td><td>{$datos["Num_asistencia"]}</td></tr>";
                        $encontrado = true;
                    }
                }
            }
        }
    }

    echo "</table>";
    if (!$encontrado) echo "<p>❌ No se encontró al artista '$nombre_buscado'.</p>";
}
ejercicio5($teatro, "Federer");


// =========================================================
// EJERCICIO 6 - Total y media de asistentes
// =========================================================
echo "<h2>6️⃣ Asistencias globales</h2>";
$media_total = round($asistencia_total / $numero_actuaciones, 2);
echo "<p>Asistencia total: <strong>$asistencia_total</strong><br>Media por actuación: <strong>$media_total</strong></p>";


// =========================================================
// EJERCICIO 7 - Artistas con más de 1000 asistentes
// =========================================================
echo "<h2>7️⃣ Artistas con más de 1000 asistentes</h2>";
$artistas_mas_1000 = [];

foreach ($teatro as $dias) {
    foreach ($dias as $escenarios) {
        foreach ($escenarios as $actuaciones) {
            foreach ($actuaciones as $datos) {
                if ($datos["Num_asistencia"] > 1000)
                    $artistas_mas_1000[$datos["artista"]] = $datos["Num_asistencia"];
            }
        }
    }
}

arsort($artistas_mas_1000);
echo "<table><tr><th>Artista</th><th>Asistentes</th></tr>";
foreach ($artistas_mas_1000 as $nombre => $asistencia) {
    echo "<tr><td>$nombre</td><td>$asistencia</td></tr>";
}
echo "</table>";
echo "<p>Total artistas con más de 1000 asistentes: " . count($artistas_mas_1000) . "</p>";


// =========================================================
// EJERCICIO 8 - Escenarios ordenados por asistencia en un día
// =========================================================
echo "<h2>8️⃣ Escenarios ordenados por asistencia (ejemplo: Sábado)</h2>";

$dia_objetivo = "Sabado";
$escenarios_orden = [];

foreach ($teatro as $dias) {
    if (isset($dias[$dia_objetivo])) {
        foreach ($dias[$dia_objetivo] as $escenario => $actuaciones) {
            $suma = 0;
            foreach ($actuaciones as $datos) {
                $suma += $datos["Num_asistencia"];
            }
            $escenarios_orden[$escenario] = $suma;
        }
    }
}

arsort($escenarios_orden);
echo "<table><tr><th>Escenario</th><th>Asistentes</th></tr>";
foreach ($escenarios_orden as $escenario => $asistencia) {
    echo "<tr><td>$escenario</td><td>$asistencia</td></tr>";
}
echo "</table>";


// =========================================================
// EJERCICIO 9 - Tabla resumen por día y hora
// =========================================================
echo "<h2>9️⃣ Tabla resumen ordenada por día y hora</h2>";

$tabla_resumen = [];
foreach ($teatro as $dias) {
    foreach ($dias as $dia => $escenarios) {
        foreach ($escenarios as $escenario => $actuaciones) {
            foreach ($actuaciones as $datos) {
                $tabla_resumen[] = [
                    "dia" => $dia,
                    "escenario" => $escenario,
                    "hora" => $datos["Hora_actuacion"],
                    "artista" => $datos["artista"],
                    "genero" => $datos["Genero_musical"],
                    "asistentes" => $datos["Num_asistencia"]
                ];
            }
        }
    }
}

usort($tabla_resumen, fn($a,$b)=>[$a["dia"],$a["hora"]] <=> [$b["dia"],$b["hora"]]);

echo "<table><tr><th>Día</th><th>Escenario</th><th>Hora</th><th>Artista</th><th>Género</th><th>Asistentes</th></tr>";
foreach ($tabla_resumen as $fila) {
    echo "<tr><td>{$fila["dia"]}</td><td>{$fila["escenario"]}</td><td>{$fila["hora"]}</td><td>{$fila["artista"]}</td><td>{$fila["genero"]}</td><td>{$fila["asistentes"]}</td></tr>";
}
echo "</table>";


// =========================================================
// EJERCICIO 10 - Géneros con media < 900
// =========================================================
echo "<h2>🔟 Géneros con asistencia media inferior a 900</h2>";

echo "<table><tr><th>Género</th><th>Actuaciones</th><th>Asistentes totales</th><th>Media</th></tr>";
foreach ($generos as $genero => $info) {
    $media = round($info["asistentes"] / $info["actuaciones"], 2);
    if ($media < 900) {
        echo "<tr><td>$genero</td><td>{$info["actuaciones"]}</td><td>{$info["asistentes"]}</td><td>$media</td></tr>";
    }
}
echo "</table>";
?>

</body>
</html>
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
