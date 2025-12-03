<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
<form name="tabla" method="get" action="">
    <h2>Calculador dias entre dos fechas</h2>
    <h3>Debes introducirlo cobn el siguiente formato: "aaaa-mm-dd"
</h3>
    fecha nacimiento<br>
    <input name="fecha" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<?php
if(isset($_GET["fecha"])){
    $fecha=strtotime($_GET["fecha"]);
    $fecha_hoy=time();
    //primera manera de hacer lo del cumpleaños
    $edad=($fecha-$fecha_hoy)/(60*60*24*365);
    //segunda manera de hacer lo del cumpleaños

    $dia_nac=date("d",$fecha);
    $dia_hoy=date("d",$fecha_hoy);
    $mes_nac=date("m",$fecha);
    $mes_hoy=date("m",$fecha_hoy);

    //para comprobar que es mayor de edad
    $año_nac=date("Y",$fecha);
    $año_hoy=date("Y",$fecha_hoy);

/* 
    if($edad>=18){
        echo'alert("FELIZ CUMPLEAÑOS!!!!!!!")';
    }*/
    if($dia_nac == $dia_hoy && $mes_nac==$mes_hoy){
        echo'FELIZ CUMPLEAÑOS!!!!!!!<br>';

    }
    if(($año_hoy-$año_nac)>=18){
        echo "eres mayor de edad";
    }else{
        echo "eres menor de edad";

    }
}

?>