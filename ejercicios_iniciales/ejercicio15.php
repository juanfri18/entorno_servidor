<?php
$numeros = array(3, 2, 8, 123, 5, 1);
sort($numeros);

?>
<!DOCTYPE html>
<html lang="es">    
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 15</title>
</head>
<body>
<h1>Ejercicio 15</h1>  
TABLA ARRAY POSICIONAL ORDENADO
    <table border="1" style="border-collapse: collapse;">
            <tr>
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 0</td> 
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $numeros[0]; ?></td>
            </tr>
            <tr>
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 1</th>
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $numeros[1]; ?></td>
            </tr>
            <tr>
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 2</th>
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $numeros[2]; ?></td>
            </tr>
            <tr>
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 3</th>
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $numeros[3]; ?></td>
            </tr>
            <tr>                
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 4</th> 
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $numeros[4]; ?></td>
            </tr>
             <tr>                
                <td style="background-color: #5e0afaff; width: 80px; color: white;">Posicíon 5</th> 
                <td style="background-color: #9968f5ff; width: 90px;"><?php echo $numeros[5]; ?></td>
            </tr> 
    </table>
</body>
</html>