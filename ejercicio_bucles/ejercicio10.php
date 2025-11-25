<?php
$contador=260;
while($contador>=110){
    if(($contador%2)==0) {
        echo "$contador es multiplo de 2 <br>";
    }
    if(($contador%3)==0) {
        echo "$contador es multiplo de 3 <br>";
    }
    $contador--;
}
?>