<?php
$conexion=new mysqli('localhost','root','','centro');
$conexion->set_charset('utf8');
$sentencia="select * from alumnos where edad<= ?";

$consulta=$conexion->prepare($sentencia);
$edad=21;
$consulta->bind_param("i",$edad);
$consulta->bind_result($dni,$edad,$nombre);
$consulta->execute();

echo"mostrando los alumnos busacdos <br>";
while($consulta->fetch()){
echo "- $dni,$nombre,$edad <br>";
}

$consulta->close();
?>