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
    Nombre alumno<br>
    <input name="nombre" type="text"><br>
    Nota Matematicas<br>
    <input name="matematicas" type="text"><br>
    Lengua<br>
    <input name="lengua" type="text"><br>
    Historia<br>
    <input name="historia" type="text"><br>
    Dibujo<br>
    <input name="dibujo" type="text"><br>
    <input name="enviar" type="submit" value="Enviar"><br><br>
</form>
<table>
<?php
function comprobar_nota($nota){
    if($nota>0 && $nota<5){
        $resultado="Insuficiente";
    }elseif($nota>5 && $nota<9){
        $resultado="Notable";
    }elseif($nota>=9 && $nota<=10){
        $resultado="sobresaliente";
    }else{
        $resultado="Nota mal/no introducida";
    }
    return $resultado;
}
if(isset($_GET["nombre"]) && isset($_GET["matematicas"]) && isset($_GET["lengua"]) && isset($_GET["historia"]) && isset($_GET["dibujo"])){
    $nombre=$_GET["nombre"];
    $matematicas=$_GET["matematicas"];
    $lengua=$_GET["lengua"];
    $historia=$_GET["historia"];
    $dibujo=$_GET["dibujo"];
    echo"<tr><td>Nombre</td><td>$nombre</td></tr>";
    echo"<tr><td>lengua</td><td>". comprobar_nota($lengua) ."</td></tr>";
    echo"<tr><td>matematicas</td><td>". comprobar_nota($matematicas) ."</td></tr>";
    echo"<tr><td>historia</td><td>". comprobar_nota($historia) ."</td></tr>";
    echo"<tr><td>dibujo</td><td>". comprobar_nota($dibujo) ."</td></tr>";


}else{
        echo"No has intoducido todos los numeros";
    }
?>
</table>