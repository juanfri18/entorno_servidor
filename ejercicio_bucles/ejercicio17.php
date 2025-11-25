<?php
echo "sin ordenar : <br>";
$palabras=array("hola","soy","juanfri");
foreach($palabras as $palabra){
    echo $palabra."<br>";
}
//esto se peude hace tbmk con la funcion strcmp($cadena1,$cadena2)
echo"<br><br>";
sort($palabras);
echo "ordenadas : <br>";
foreach($palabras as $palabra){
    echo $palabra."<br>";
}
?>