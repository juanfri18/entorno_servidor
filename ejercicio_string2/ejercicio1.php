<<<<<<< HEAD
<?php
//concatenaacion sin operadores 
$cadena1 = 'Mi mamá me mima';
$cadena2 = 'Quiero mucho a mi mamá';
//convertimos las strins a arrays y las fusionamos en una con merge
$arr1 = str_split($cadena1);
$arr2 = str_split($cadena2);
$fusion=array_merge($arr1,$arr2);
// con implode las volvemos a convertir a string para mostrtarlo
$fusion_string=implode("",$fusion);
echo $fusion_string."<br>";
//cadena1
$minusculas_cad1= strtolower($cadena1);
$array_minu_cad1=str_split($minusculas_cad1);
$cuenta_letras_cad1 =array_count_values($array_minu_cad1);
echo"CADENA 1<br>";
foreach($cuenta_letras_cad1 as $letra=>$num_veces){
    echo"la letra $letra se repite $num_veces <br>";
}

//cadena2
$minusculas_cad2= strtolower($cadena2);
$array_minu_cad2=str_split($minusculas_cad2);
$cuenta_letras_cad2 =array_count_values($array_minu_cad2);
echo"CADENA 2<br>";
foreach($cuenta_letras_cad2 as $letra=>$num_veces){
    echo"la letra $letra se repite $num_veces <br>";
}


//vces que se repite cada letra del abcdario dentro de las dos unidas
$minusculas= strtolower($fusion_string);
$array_minu=str_split($minusculas);
$cuenta_letras =array_count_values($array_minu);
echo"FUSION DE LAS DOS CADENAS<br>";
foreach($cuenta_letras as $letra=>$num_veces){
    echo"la letra $letra se repite $num_veces <br>";
}
=======
<?php
//concatenaacion sin operadores 
$cadena1 = 'Mi mamá me mima';
$cadena2 = 'Quiero mucho a mi mamá';
//convertimos las strins a arrays y las fusionamos en una con merge
$arr1 = str_split($cadena1);
$arr2 = str_split($cadena2);
$fusion=array_merge($arr1,$arr2);
// con implode las volvemos a convertir a string para mostrtarlo
$fusion_string=implode("",$fusion);
echo $fusion_string."<br>";
//cadena1
$minusculas_cad1= strtolower($cadena1);
$array_minu_cad1=str_split($minusculas_cad1);
$cuenta_letras_cad1 =array_count_values($array_minu_cad1);
echo"CADENA 1<br>";
foreach($cuenta_letras_cad1 as $letra=>$num_veces){
    echo"la letra $letra se repite $num_veces <br>";
}

//cadena2
$minusculas_cad2= strtolower($cadena2);
$array_minu_cad2=str_split($minusculas_cad2);
$cuenta_letras_cad2 =array_count_values($array_minu_cad2);
echo"CADENA 2<br>";
foreach($cuenta_letras_cad2 as $letra=>$num_veces){
    echo"la letra $letra se repite $num_veces <br>";
}


//vces que se repite cada letra del abcdario dentro de las dos unidas
$minusculas= strtolower($fusion_string);
$array_minu=str_split($minusculas);
$cuenta_letras =array_count_values($array_minu);
echo"FUSION DE LAS DOS CADENAS<br>";
foreach($cuenta_letras as $letra=>$num_veces){
    echo"la letra $letra se repite $num_veces <br>";
}
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
?>