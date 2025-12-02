<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
<form name="tabla" method="get" action="">
    <h2>Calculador dias entre dos fechas</h2>
    <h3>Debes introducirlo cobn el siguiente formato: "aaaa-mm-dd"
</h3>
    Primera fecha<br>
    <input name="fecha1" type="text"><br>
    Segunda fecha<br>
    <input name="fecha2" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["fecha1"]) && isset($_GET["fecha2"])){
    $fecha1=strtotime($_GET["fecha1"]);
    $fecha2=strtotime($_GET["fecha2"]);
    if($fecha1>=$fecha2){
    $diferencia_fechas=$fecha1-$fecha2;
    }else{
    $diferencia_fechas=$fecha2-$fecha1;
    }
    $numero_dias_dif=$diferencia_fechas/(3600*24);
    echo $numero_dias_dif;
}

?>