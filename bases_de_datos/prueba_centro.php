<?php
$conexion=new mysqli('localhost','root','','centro');
$conexion->set_charset('utf8');
$consulta="select nombre, edad from alumnos";
$resultado=$conexion->query($consulta);
$numero_filas=$resultado->num_rows;
echo"se han encontrado $numero_filas alumnos";

while($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
    echo"<br> $fila[nombre] tienen $fila[edad] años";
}

$conexion->close();

?>