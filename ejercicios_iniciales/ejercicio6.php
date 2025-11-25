<?php
$edad = 20;
$es_estudiante = true;
$tiene_dni = false;
if ($edad >= 18 && $tiene_dni) {
    echo "Puedes entrar a la discoteca. <br>";
        if ($es_estudiante or $edad < 25) {
            echo "Tienes beneficios . <br>";
            } else {
                echo "No tienes beneficios . <br>";
            }
} else {
    echo "No puedes entrar a la discoteca. <br>";
}
?>