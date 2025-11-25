<?php
$usuarios=[
    "Juanfri18"=>"juanfri1234",
    "jjordi"=>"12345",
    "soyenmanuel"=>"manuel",
    "fedevalverde"=>"fEdEvAlVeRdE",
    "josejuan22"=>"2323"
];
foreach($usuarios as $nombre=>$contraseña){
    $nom_minu=strtolower($nombre);
    $contra_minu=strtolower($contraseña);
    $num_car_contra=strlen($contraseña);
    $buscador=strpos($contra_minu,$nom_minu);
    $cadena_privada=str_repeat("*",$num_car_contra);

    if($buscador !== false){
        echo "$nombre , $cadena_privada , incorrecto <br>";
    }else{
        echo "$nombre , $cadena_privada , correcto <br>";

    }
}
?>