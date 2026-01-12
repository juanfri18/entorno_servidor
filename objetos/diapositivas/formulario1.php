<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        nombre del animal<input type="text" name="nombre"><br>
        color del animal<input type="text" name="color"><br>
        fecha nacimiento del animal<input type="date" name="fecha_nac"><br>
        <input type="submit" name="enviar">
    </form>
<?php 
require_once('ejercicio1.php');
if(isset($_POST["enviar"])){
    $animal1=new animal();
    $animal1->__set("nombre",$_POST["nombre"]);
    $animal1->__set("color",$_POST["color"]);
    $animal1->__set("fecha_nac",$_POST["fecha_nac"]);
    
    echo $animal1 ;
}

?>
</body>
</html>