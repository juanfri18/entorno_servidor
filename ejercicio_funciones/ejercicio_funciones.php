<<<<<<< HEAD
<?php   
    /*
    para selecionar caracteres de un string
    substr($string,$posicion);
    mb_substr($string,$comienzo,$length)
    strtoupper($cadena): Convierte toda la cadena de texto a mayúsculas. 
    ucfirst($cadena): Convierte solo el primer carácter de la cadena a mayúsculas. 
    ucwords($cadena): Convierte la primera letra de cada palabra en una cadena a mayúsculas. 
    */
//ejercicio 1
//primera letra en minuscula
function corregir_primera_letra($palabra){
 return ucfirst($palabra)."<br>";
//mb_strtolower() Convierte todos los caracteres a minúsculas
}
echo corregir_primera_letra("juanfri");

//ejercicio 2
function corregir_mayusculas($valor){
  $palabra=mb_strtolower($valor);
    return corregir_primera_letra($palabra)."<br>";
}
echo corregir_mayusculas("jUANFRI");

//ejercicio3 
//strlen() me da la longitud de un string
function contar_letra_a($palabra){
    $contador_a=0;
    for($i=0;$i<strlen($palabra);$i++){
        if($palabra[$i]=="a" or $palabra[$i]=="A"){
            $contador_a++;
        }
    }
    return $contador_a."<br>";
}
echo contar_letra_a("hola soy JuAnfri aahh");

//ejercicio4
// ctype_upper() cuenta las mayusculas
//ctype_lower() cuenta las minusculas
function contar_mayusculas($frase){
    $contador_mayus=0;
    
// Convertimos la frase en un array de caracteres
    $letras = str_split($frase);

    foreach($letras as $letra){
        if(ctype_upper($letra)){
            $contador_mayus++;
        }
    }
    $frase="El numero de letras mayussculas es $contador_mayus <br>"; 
    return $frase;
}
echo contar_mayusculas("hola soy JuAnfri aAAAahh");

//EJERCICIO 5
function contar_letra($frase,$letra_a_contar){
$contador_letra=0;
$letra_minus=mb_strtolower($letra_a_contar);
$letra_mayus=mb_strtoupper($letra_a_contar);
//mb_strtoupper — Convierte todos los caracteres a mayúsculas
//mb_strtolower() Convierte todos los caracteres a minúsculas
$letras=str_split($frase);
foreach($letras as $letra){
    if($letra==$letra_minus or $letra==$letra_mayus){
        $contador_letra++;
    }
}
return $contador_letra;
}
echo contar_letra("hola isoy JuAnfrI aAAAahh i tu ignacio","i")."<br>";

//EJERCICIO 6 

//NO PODEMOS HACERLO AUN 



//EJERCICIO 7

function diferencia_fechas($fecha){
    //me da la fecha de hoy
$today = getdate();
$fecha_hoy=$today["year"]."-".$today["mon"]."-".$today["mday"];
//conviere de string 
$fecha_usuario_sec=strtotime($fecha);
$fecha_hoy_sec=strtotime($fecha_hoy);
$diferencias_fechas_sec=$fecha_hoy_sec-$fecha_usuario_sec;
$diferencias_fechas_dias=number_format(($diferencias_fechas_sec/(86400)),0);
return $diferencias_fechas_dias;
}


echo "entre la fecha que introduciste y la de hoy hay ".diferencia_fechas("2003/12/18")." dias de diferencia";
//ejercicio 8

function color_celda($color,$numero){
    echo "<table>";
 echo '<tr><td style="background-color:'.$color.';">'.$numero.'</td></tr>';
 echo "</table>";
}
echo color_celda("#ff0000ff",23)."<br>";

//falta la segunda parte del ejercicio pero aun no lo podemos hacer 
// in_array($parametro,$array) => comprueba si el parametetro esta dentro del array
 


//ejercicio 9
function media_notas_alum($array){
    $notas=0;
    $num_notas=0;
foreach($array as $categoria=>$dato){
    if(is_numeric($dato)){
        $notas+=$dato;
        $num_notas++;
    }
}
$nota_media=$notas/$num_notas;
return $nota_media;
}
$array_alumno=["nombre"=>"Juanfri","apellidos"=>"Cortejosa Galindo","nota1"=>6.5,"nota2"=>7.5,"nota3"=>10];

echo media_notas_alum($array_alumno);
//falta la segunda parte
?>
=======
<?php   
    /*
    para selecionar caracteres de un string
    substr($string,$posicion);
    mb_substr($string,$comienzo,$length)
    strtoupper($cadena): Convierte toda la cadena de texto a mayúsculas. 
    ucfirst($cadena): Convierte solo el primer carácter de la cadena a mayúsculas. 
    ucwords($cadena): Convierte la primera letra de cada palabra en una cadena a mayúsculas. 
    */
//ejercicio 1
//primera letra en minuscula
function corregir_primera_letra($palabra){
 return ucfirst($palabra)."<br>";
//mb_strtolower() Convierte todos los caracteres a minúsculas
}
echo corregir_primera_letra("juanfri");

//ejercicio 2
function corregir_mayusculas($valor){
  $palabra=mb_strtolower($valor);
    return corregir_primera_letra($palabra)."<br>";
}
echo corregir_mayusculas("jUANFRI");

//ejercicio3 
//strlen() me da la longitud de un string
function contar_letra_a($palabra){
    $contador_a=0;
    for($i=0;$i<strlen($palabra);$i++){
        if($palabra[$i]=="a" or $palabra[$i]=="A"){
            $contador_a++;
        }
    }
    return $contador_a."<br>";
}
echo contar_letra_a("hola soy JuAnfri aahh");

//ejercicio4
// ctype_upper() cuenta las mayusculas
//ctype_lower() cuenta las minusculas
function contar_mayusculas($frase){
    $contador_mayus=0;
    
// Convertimos la frase en un array de caracteres
    $letras = str_split($frase);

    foreach($letras as $letra){
        if(ctype_upper($letra)){
            $contador_mayus++;
        }
    }
    $frase="El numero de letras mayussculas es $contador_mayus <br>"; 
    return $frase;
}
echo contar_mayusculas("hola soy JuAnfri aAAAahh");

//EJERCICIO 5
function contar_letra($frase,$letra_a_contar){
$contador_letra=0;
$letra_minus=mb_strtolower($letra_a_contar);
$letra_mayus=mb_strtoupper($letra_a_contar);
//mb_strtoupper — Convierte todos los caracteres a mayúsculas
//mb_strtolower() Convierte todos los caracteres a minúsculas
$letras=str_split($frase);
foreach($letras as $letra){
    if($letra==$letra_minus or $letra==$letra_mayus){
        $contador_letra++;
    }
}
return $contador_letra;
}
echo contar_letra("hola isoy JuAnfrI aAAAahh i tu ignacio","i")."<br>";

//EJERCICIO 6 

//NO PODEMOS HACERLO AUN 



//EJERCICIO 7

function diferencia_fechas($fecha){
    //me da la fecha de hoy
$today = getdate();
$fecha_hoy=$today["year"]."-".$today["mon"]."-".$today["mday"];
//conviere de string 
$fecha_usuario_sec=strtotime($fecha);
$fecha_hoy_sec=strtotime($fecha_hoy);
$diferencias_fechas_sec=$fecha_hoy_sec-$fecha_usuario_sec;
$diferencias_fechas_dias=number_format(($diferencias_fechas_sec/(86400)),0);
return $diferencias_fechas_dias;
}


echo "entre la fecha que introduciste y la de hoy hay ".diferencia_fechas("2003/12/18")." dias de diferencia";
//ejercicio 8

function color_celda($color,$numero){
    echo "<table>";
 echo '<tr><td style="background-color:'.$color.';">'.$numero.'</td></tr>';
 echo "</table>";
}
echo color_celda("#ff0000ff",23)."<br>";

//falta la segunda parte del ejercicio pero aun no lo podemos hacer 
// in_array($parametro,$array) => comprueba si el parametetro esta dentro del array
 


//ejercicio 9
function media_notas_alum($array){
    $notas=0;
    $num_notas=0;
foreach($array as $categoria=>$dato){
    if(is_numeric($dato)){
        $notas+=$dato;
        $num_notas++;
    }
}
$nota_media=$notas/$num_notas;
return $nota_media;
}
$array_alumno=["nombre"=>"Juanfri","apellidos"=>"Cortejosa Galindo","nota1"=>6.5,"nota2"=>7.5,"nota3"=>10];

echo media_notas_alum($array_alumno);
//falta la segunda parte
?>
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
