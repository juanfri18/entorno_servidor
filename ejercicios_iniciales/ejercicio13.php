
<?php
$persona[0] = "X";
$persona[1] = "Y";
$persona[2] = "Z";
$persona[3] = "X+Y";
$persona[4] = "Y*Z";
$persona[5] = "X/Z";
$persona[6] = "X+Y+Z";
$persona[7] = "(Y+Z)/X";


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 13</title>

</head>
<body>
<h1>Ejercicio 13</h1>
TABLA ARRAY POSICIONAL
    <table border="1" style="border-collapse: collapse;">
            <tr>
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 0</td> 
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $persona[0]; ?></td>
            </tr>
            <tr>
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 1</th>
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $persona[1]; ?></td>
            </tr>
            <tr>
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 2</th>
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $persona[2]; ?></td>
            </tr>
            <tr>
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 3</th>
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $persona[3]; ?></td>
            </tr>
            <tr>                
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 4</th> 
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $persona[4]; ?></td>
            </tr>
             <tr>                
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 5</th> 
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $persona[5]; ?></td>
            </tr>
             <tr>                
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 6</th> 
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $persona[6]; ?></td>
            </tr> 
            <tr>                
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 7</th> 
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $persona[7]; ?></td>
            </tr>
    </table>
