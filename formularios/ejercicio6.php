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
    nombre<br>
    <input name="nombre" type="text"><br>
    edad<br>

    <input name="edad" type="text"><br>

    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["nombre"]) && isset($_GET["edad"]) ){

    $nombre=$_GET["nombre"];
    $edad=$_GET["edad"];
    if($edad<18){
        echo " $nombre tiene $edad, es menor de edad.";
    }else{
        echo " $nombre tiene $edad, es mayor de edad.";
    }

}else{
        echo"No has intoducido todos los numeros";
    }
?>
