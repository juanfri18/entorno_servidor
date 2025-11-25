<?php
//array  posicionales
$matriz[0] = "Jorge";
$matriz[1] = "Pérez";
$matriz[2] = 35;
$matriz[3] = 1.77;
$matriz[4] = 80;
$matriz[5] = "Moreno";
$matriz[6] = "Soltero";

//array asociativo
$matriz2['nombre'] = "Jorge";
$matriz2["apellido"] = "Pérez";
$matriz2["edad"] = 35;
$matriz2["altura"] = 1.77;
$matriz2["peso"] = 80;
$matriz2["color"] = "Moreno";
$matriz2["estado"] = "Soltero";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ARRAYS</title>
    TABLA ARRAY POSICIONAL
</head>
    <table border="1" style="border-collapse: collapse;">

        <tr>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
        </tr>
        <tr>
            <td><?php echo $matriz[0]; ?></td>
            <td><?php echo $matriz[1]; ?></td>
            <td><?php echo $matriz[2]; ?></td>
            <td><?php echo $matriz[3]; ?></td>
            <td><?php echo $matriz[4]; ?></td>
            <td><?php echo $matriz[5]; ?></td>
            <td><?php echo $matriz[6]; ?></td>
    </table>
    <br><br>
    TABLA ARRAY ASOCIATIVO

    <table border="1" style="border-collapse: collapse;">

        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>edad</th>
            <th>altura</th>
            <th>peso</th>
            <th>pelo</th>
            <th>estado</th>
        </tr>
        <tr>
            <td><?php echo $matriz2['nombre']; ?></td>
            <td><?php echo $matriz2["apellido"]; ?></td>
            <td><?php echo $matriz2["edad"]; ?></td>
            <td><?php echo $matriz2["altura"]; ?></td>
            <td><?php echo $matriz2["peso"]; ?></td>
            <td><?php echo $matriz2["color"]; ?></td>
            <td><?php echo $matriz2["estado"]; ?></td>
    </table>
</head>