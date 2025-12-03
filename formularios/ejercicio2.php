<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 2</title>
<form name="tabla" method="get" action="">
    Numero<br>
    <input name="numero" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["numero"])){
    $numero=$_GET["numero"];
    echo "TABLA DEL $numero :<br>";
    
    for($i=0;$i<=10;$i++){
        $multiplicacion=$numero*$i;
        echo "$numero X $i = $multiplicacion <br>";
    }
    }else{
        echo"Numero no introducido";
    }
=======
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
<form name="tabla" method="get" action="">
    Numero<br>
    <input name="numero" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["numero"])){
    $numero=$_GET["numero"];
    echo "TABLA DEL $numero :<br>";
    
    for($i=0;$i<=10;$i++){
        $multiplicacion=$numero*$i;
        echo "$numero X $i = $multiplicacion <br>";
    }
    }else{
        echo"Numero no introducido";
    }
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
?>