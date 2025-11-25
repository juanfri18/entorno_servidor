<?php
//escribir una pagina en php que cree un array cuyas posiciones se llamen "palabra1","palbra2"... la web mostraarar el array dentro de una tabla
$array_palabras=array();
for($i=1;$i<=4;$i++){
    $palabra= "palabra$i";
    $array_palabras[$i] = $palabra;
}
?>
<!DOCTYPE html>
<html lang="es">
    <table border="4" style="background-color: #fc0505ff; color: #ffffff; border-color: #acecffff;">
        <tr>
            <td>valor</td>
            <td>posicion</td>
        </tr>
        <?php foreach ($array_palabras as $posicion => $valor): ?>
        <tr>
            <td><?php echo $valor; ?></td>  
            <td><?php echo $posicion; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</html>