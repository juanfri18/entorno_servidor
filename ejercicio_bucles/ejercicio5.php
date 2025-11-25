<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 5</title>
</head>
<body>
     <table border="1">
        <tr>       
        <?php 
        //Bucle while que muestre una tabla de 10x10
        $contador1=0;
        while($contador<=10){
            $contador2=0;
            echo "<tr>";
            while($contador2<=10){
                echo "<td>$contador</td>";
                $contador2++;
            }
            $contador1++;
            echo "</tr>";
        }
        ?>
        </tr>
    </table>
</body>
</html>