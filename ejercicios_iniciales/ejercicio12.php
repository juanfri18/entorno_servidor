<?php
$persona["nombre"] = "Juan Francisco";
$persona["apellidos"] = "Cortejosa Galindo";
$persona["edad"] = 21;
$persona["fecha nacimiento"] = "18/12/2003";
$persona["salario"] = 1442.00;


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 12</title>

</head>
<body>
<h1>Ejercicio 12</h1>
TABLA ARRAY POSICIONAL
    <table border="1" style="border-collapse: collapse;">
            <tr>
                <td style="background-color: green; width: 30px;">nombre</td> 
                <td style="background-color: #ccf3b1ff; width: 190px;"><?php echo $persona["nombre"]; ?></td>
            </tr>
            <tr>
                <td style="background-color: green; width: 30px;">apellidos</th>
                <td style="background-color: #ccf3b1ff; width: 190px;"><?php echo $persona["apellidos"]; ?></td>
            </tr>
            <tr>
                <td style="background-color: green; width: 30px;">edad</th>
                <td style="background-color: #ccf3b1ff; width: 190px;"><?php echo $persona["edad"]; ?></td>
            </tr>
            <tr>
                <td style="background-color: green; width: 30px;">nacimiento</th>
                <td style="background-color: #ccf3b1ff; width: 190px;"><?php echo $persona["fecha nacimiento"]; ?></td>
            </tr>
            <tr>                
                <td style="background-color: green; width: 30px;">salario</th> 
                <td style="background-color: #ccf3b1ff; width: 190px;"><?php echo $persona["salario"]; ?></td>

            </tr>
    </table>