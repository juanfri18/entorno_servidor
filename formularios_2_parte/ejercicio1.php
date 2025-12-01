<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
<form name="tabla" method="get" action="">
    Nombre<br>
    <input name="nombre" type="text"><br>
    Edad<br>
    <input name="edad" type="text"><br>

    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["nombre"]) && isset($_GET["edad"])){
    $numero=$_GET["nombre"];
    $numero=$_GET["edad"];

}    
?>