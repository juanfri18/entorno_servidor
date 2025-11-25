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
    Numero<br>
    <input name="numero1" type="text"><br>
    <input name="numero2" type="text"><br>

    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["numero1"]) && isset($_GET["numero2"]) ){
    $numero1=$_GET["numero1"];
    $numero2=$_GET["numero2"];
    if($numero1<$numero2){
        for($i=$numero1;$i<=$numero2;$i++){
            echo "$i <br>";
        }
    }else{
        for($i=$numero2;$i<=$numero1;$i++){
            echo "$i <br>";
        }
    }
}else{
        echo"No has intoducido todos los numeros";
    }
?>
