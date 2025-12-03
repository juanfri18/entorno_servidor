<<<<<<< HEAD
<?php

$parrafo_cod="Ipmb rvfsjep bnjhp. Dpnp uf fñdvfñusbt. Uf nbñep nvdipt cftpt. Ibtub qspñup.";
$patron=".";
$array_codf=array();
$frase_cod=strtok($parrafo_cod,$patron);
while($frase_cod!=false){
    $array_codf[]=$frase_cod;
    $frase_cod=strtok($patron);
}
$contador=1;
$origen="abcdefghijklmnopqrstuvwxyz";
$destino="zabcdefghijklmnopqrstuvwxy";
$frases_decod = [];
foreach($array_codf as $frase_cod){
    echo"<br>frase $contador codificada<br>";
    echo $frase_cod."<br>";
    $contador++;
}
=======
<?php

$parrafo_cod="Ipmb rvfsjep bnjhp. Dpnp uf fñdvfñusbt. Uf nbñep nvdipt cftpt. Ibtub qspñup.";
$patron=".";
$array_codf=array();
$frase_cod=strtok($parrafo_cod,$patron);
while($frase_cod!=false){
    $array_codf[]=$frase_cod;
    $frase_cod=strtok($patron);
}
$contador=1;
$origen="abcdefghijklmnopqrstuvwxyz";
$destino="zabcdefghijklmnopqrstuvwxy";
$frases_decod = [];
foreach($array_codf as $frase_cod){
    echo"<br>frase $contador codificada<br>";
    echo $frase_cod."<br>";
    $contador++;
}
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
?>