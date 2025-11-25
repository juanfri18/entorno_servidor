<?php
$nombre = $_GET["nombre"];
$apellidos= $_GET["apellidos"];
$mail= $_GET["mail"];
$apartado= $_GET["apartado"];
$subscribirse= $_GET["subscribirse"];
$consul= $_GET["consulta"];

if($nombre){
    echo "Hola $nombre ";
}
if($apellidos){
    echo "$apellidos.<br>";
}
?>