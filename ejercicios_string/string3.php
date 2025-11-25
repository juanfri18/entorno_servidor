<?php 
$cadena="Aa0@";
if(preg_match("`[A-Z]{1,}[a-z]{1,}[0-9]{1,}[@#\/%$!*^]{1,}`",$cadena)){
    echo"Si cumple el patron";
}else{
    echo"No cumple el patron";
}
?>