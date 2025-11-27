<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 3</title>
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
</style>
<form name="tabla" method="get" action="">
    Numero 1<br>
    <input name="numero1" type="text"><br>
    Numero 2<br>
    <input name="numero2" type="text"><br>
    Numero 3<br>
    <input name="numero3" type="text"><br>
    Numero 4<br>
    <input name="numero4" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<table>
<?php

if(isset($_GET["numero1"]) && isset($_GET["numero2"]) && isset($_GET["numero3"]) && isset($_GET["numero4"])){
    $numero1=$_GET["numero1"];
    $numero2=$_GET["numero2"];
    $numero3=$_GET["numero3"];
    $numero4=$_GET["numero4"];
    $array_numeros=[$numero1,$numero2,$numero3,$numero4];
        echo"<tr><td>Numero</td><td>Cuadrado</td><td>Cubo</td></tr>";
    foreach($array_numeros as $numero){
        echo"<tr><td>$numero</td><td>".($numero**2)."</td><td>".($numero**3)."</td></tr>";
    }
}else{
        echo"No has intoducido todos los numeros";
    }
?>
</table>