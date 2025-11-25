<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 4</title>
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
    Numero<br>
    <input name="numero1" type="text"><br>
    <input name="numero2" type="text"><br>
    <input name="numero3" type="text"><br>

    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<table>
<?php
if(isset($_GET["numero1"]) && isset($_GET["numero2"]) &&isset($_GET["numero3"]) ){
    $numero1=$_GET["numero1"];
    $numero2=$_GET["numero2"];
    $numero3=$_GET["numero3"];
    echo "<tr><td>Valor 1</td><td>$numero1</td></tr>";
    echo "<tr><td>Valor 2</td><td>$numero2</td></tr>";
    echo "<tr><td>Valor 3</td><td>$numero3</td></tr>";
    echo "<tr><td>Valor1+Valor2</td><td>".$numero1+$numero2."</td></tr>";
    echo "<tr><td>Valor2*Valor3</td><td>".$numero2*$numero3."</td></tr>";
    echo "<tr><td>Valor1/Valor3</td><td>".$numero1/$numero3."</td></tr>";
    echo "<tr><td>Valor1+Valor2+Valor3</td><td>".$numero1+$numero2+$numero3."</td></tr>";
    echo "<tr><td>(valor2 + valor3) / valor1</td><td>".($numero2+$numero3)/$numero1."</td></tr>";




    }else{
        echo"No has intoducido todos los numeros";
    }
?>
</table>