<?php
$menu_vegetariano = array("Ensalada", "Sopa de verduras", "Pasta al pesto", "Tarta de espinacas");
$menu_carnivoro= array("Pollo asado", "Carne guisada", "Pasta bolognesa", "Tarta de carne");
$menu_internacional= array("Sushi", "Curry", "Tacos", "hamburguesa");
$precio_vegetariano= array("Ensalada"=>9, "Sopa de verduras"=>6.5, "Pasta al pesto"=>12, "Tarta de espinacas"=>5);
$precio_carnivoro= array("Pollo asado"=>11, "Carne guisada"=>13, "Pasta bolognesa"=>14, "Tarta de carne"=>5.5);
$precio_internacional= array("Sushi"=>15, "Curry"=>10, "Tacos"=>8, "hamburguesa"=>9);
$num_plato=count($menu_vegetariano)+count($menu_carnivoro)+count($menu_internacional);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title >Ejercicio 17</title>
    </head>
    <body>
        <h1>Ejercicio 17</h1>
        <div>
            <h2>Menú vegetariano</h2>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <td style="background-color: #b99803ff; width: 150px; color: white;">Plato</td> 
                    <td style="background-color: #f1db76ff; width: 90px;">Precio</td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_vegetariano[0]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_vegetariano[$menu_vegetariano[0]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_vegetariano[1]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_vegetariano[$menu_vegetariano[1]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_vegetariano[2]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_vegetariano[$menu_vegetariano[2]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_vegetariano[3]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_vegetariano[$menu_vegetariano[3]]." €"; ?></td>
                </tr>
            </table>
                
        </div>
                <div>
            <h2>Menú carnivoro</h2>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <td style="background-color: #b99803ff; width: 150px; color: white;">Plato</td> 
                    <td style="background-color: #f1db76ff; width: 90px;">Precio</td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_carnivoro[0]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_carnivoro[$menu_carnivoro[0]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_carnivoro[1]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_carnivoro[$menu_carnivoro[1]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_carnivoro[2]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_carnivoro[$menu_carnivoro[2]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_carnivoro[3]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_carnivoro[$menu_carnivoro[3]]." €"; ?></td>
                </tr>
            </table>
                
        </div>
                <div>
            <h2>Menú vegetariano</h2>
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <td style="background-color: #b99803ff; width: 150px; color: white;">Plato</td> 
                    <td style="background-color: #f1db76ff; width: 90px;">Precio</td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_vegetariano[0]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_internacional[$menu_internacional[0]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_vegetariano[1]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_internacional[$menu_internacional[1]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_vegetariano[2]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_internacional[$menu_internacional[2]]." €"; ?></td>
                </tr>
                <tr>
                    <td style="background-color: #5799f0ff; width: 150px; color: white;"><?php echo $menu_vegetariano[3]; ?></td>
                    <td style="background-color: #90c0ffff; width: 90px;"><?php echo $precio_internacional[$menu_internacional[3]]." €"; ?></td>
                </tr>
            </table>
                
        </div>
        <p  style="background-color: #5799f0ff; color: white;">El número total de platos en el restaurante es: <?php echo $num_plato; ?></p>
    </body>
</html>