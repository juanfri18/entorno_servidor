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
    numero<br>
    <input name="numero" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php

if(isset($_GET["numero"]) ){
    $numero=$_GET["numero"];
    $divisores= [1,$numero];
    for($i=2;$i<=($numero/2);$i++){
        if(($numero%$i)==0){
            $divisores[]=$i;
        }
    }
    if(count($divisores)>3){
        echo "El numero no es primo , estos son los divisores que tiene: <br>";
        sort($divisores);
        foreach($divisores as $divisor){
            echo "$divisor <br>";
        }
    }else{
        echo "el numero $numero es primo";
    }
}else{
        echo"No has intoducido todos los numeros";
    }
?>
