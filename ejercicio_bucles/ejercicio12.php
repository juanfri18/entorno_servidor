<?php
$alumno = [
    "nombre" => "Carlos Pérez",
    "notas" => [
        "Programación" => rand(0, 10),
        "Bases de Datos" => rand(0, 10),
        "Sistemas Informáticos" => rand(0, 10),
        "Lenguajes de marcas" => rand(0, 10),
        "Entornos de desarrollo" => rand(0, 10),
    ]
];
$suma=0;
foreach($alumno["notas"] as $modulo => $nota){
    echo "la nota de $modulo es $nota <br>";
    $suma=$nota+$suma;
}
$nota_media=$suma/5;
echo "la nota media del curso es $nota_media <br>";
if($nota_media<=4.5){
    echo "has suspendido el curso";
}else{
    echo "enhorabuena has aprobado el ciclo de DAW";
}
?>