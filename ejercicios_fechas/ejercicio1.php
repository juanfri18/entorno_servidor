<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
<form name="tabla" method="get" action="">
    <h2>Calculador dia en el que naciste</h2>
    <h3>Debes introducirlo todo en numero con el siguiente formato:
    <ul>
        <li>dia: "00"</li>
        <li>mes: "00"</li>
        <li>año: "0000"</li>
    </ul>
</h3>
    Dia<br>
    <input name="dia" type="text"><br>
    Mes<br>
    <input name="mes" type="text"><br>
    Año<br>
    <input name="año" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["dia"]) && isset($_GET["mes"]) && isset($_GET["año"])){
    $dia=$_GET["dia"];
    $mes=$_GET["mes"];
    $anio=$_GET["año"];
    $fecha = mktime(0, 0, 0, $mes, $dia, $anio);
    $dia_letras=date("l", $fecha);

/* esto seria objetos mas bien 
$fecha_introducida=new DateTime("$dia-$mes-$año");
$dia_letras = $fecha_introducida->format('l');
*/    
echo $dia_letras;
}

?>