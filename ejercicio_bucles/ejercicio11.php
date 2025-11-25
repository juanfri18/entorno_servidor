<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 11</title>
</head>
<body>
    <?php
    function Devuelve_dia($dia){
            switch ($dia) {
            case 1: return "Lunes";
            case 2: return "Martes";
            case 3: return "Miércoles";
            case 4: return "Jueves";
            case 5: return "Viernes";
            case 6: return "Sábado";
            case 7: return "Domingo";
            default: return "Número inválido";
        }

    }
    $temperaturas=array(9,13,14,17,23,25,27);
    $contador=1;
    foreach($temperaturas as $temperatura  ){
        
        if($temperatura < 10 ){
            echo"<p style='background-color: blue;'> El ". Devuelve_dia($contador). " la temeperatura sera baja </p>";
        }elseif($temperatura >=10 && $temperatura <=25){
            echo"<p style='background-color: green;'> El ". Devuelve_dia($contador). " la temeperatura sera moderada </p>";

        }elseif($temperatura > 25 ){
            echo"<p style='background-color: red;'> El ". Devuelve_dia($contador). " la temeperatura sera alta </p>";
        }
        $contador ++;
    }
    ?>
</body>
</html>