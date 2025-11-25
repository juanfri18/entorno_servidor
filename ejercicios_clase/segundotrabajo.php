<?php
$num1 = 5;
$num2 = 2;
$suma = $num1 + $num2;
$resta= $num1 - $num2;
$multiplicacion= $num1 * $num2;
$division= $num1 / $num2;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Primer Trabajo Juanfri</title>
    </head>
    <body>
        <h1>TABLA SUMA</h1>
        <table border="1" style="border-collapse: collapse;">
            <tr>
                <th>operacion</th>
                <th>resultado</th>
                <th>operacion</th>
                <th>resultado</th>
            </tr>
            <tr>
                <th><?php echo "$num1 + $num2 " ?></th>
                <th><?php echo $suma ?></th>
                <th><?php echo "$num1 - $num2 " ?></th>
                <th><?php echo $resta ?></th>
            </tr>  
            <tr>
                <th><?php echo "$num1 x $num2 " ?></th>
                <th><?php echo $multiplicacion ?></th>
                <th><?php echo "$num1 / $num2 " ?></th>
                <th><?php echo $division ?></th>
            </tr>     
        </table>
</html>