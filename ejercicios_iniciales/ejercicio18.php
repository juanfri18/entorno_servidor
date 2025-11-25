<?php
$libros = array("titulo"=>"12 reglas para vivir","autor"=>"Jordan Peterson","Genero"=>"psicologia","año"=>"2013","imagen"=>'<img src="12reglasparavivir.png" alt="foto portada">
');


?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title >Ejercicio 18</title>
    </head>
    <body>
        <h1>Ejercicio 18</h1> 
        <h2>SECCION DE LIBROS</h2>
        <div>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <td style="background-color: #b99803ff; width: 150px; color: white;">titulo</td> 
                    <td style="background-color: #f1db76ff; width: 90px;">autor</td>
                    <td style="background-color: #f1db76ff; width: 90px;">Genero</td>
                    <td style="background-color: #f1db76ff; width: 90px;">año</td>
                    <td style="background-color: #f1db76ff; width: 90px;">imagen</td>
            </tr>
            <tr>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["titulo"] ?></td>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["autor"] ?></td>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["Genero"] ?></td>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["año"] ?></td>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["imagen"] ?></td>
            </tr>
        </div>
    <br>
        <div>
            <table border="1" style="border-collapse: collapse;">
            <tr>
                <td style="background-color: #b99803ff; width: 150px; color: white;">titulo</td> 
                <td style="background-color: #f1db76ff; width: 90px;">autor</td>
                <td style="background-color: #f1db76ff; width: 90px;">Genero</td>
                <td style="background-color: #f1db76ff; width: 90px;">año</td>
                <td style="background-color: #f1db76ff; width: 90px;">imagen</td>
            </tr>
            <tr>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["titulo"] ?></td>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["autor"] ?></td>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["Genero"] ?></td>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["año"] ?></td>
                <td style="background-color: #90c0ffff; width: 90px;"><?php echo $libros["imagen"] ?></td>
            </tr>
            </table>
        </div>
                
    </body>
</html>