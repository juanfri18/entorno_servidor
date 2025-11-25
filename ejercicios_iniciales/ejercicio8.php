<?php
$num=5;
if (isset($num)) {
    echo "la variable existe<br>";
} else {
    echo "la variable no existe<br>";
}
if (empty($num)) {
    echo "la variable esta vacia<br>";
} else {
    echo "la variable no esta vacia<br>";
}

if (gettype($num)==="integer") {
    echo "la variable es de tipo entero<br>";
} elseif (gettype($num)==="string") {
    echo "la variable es de tipo cadena<br>";
} elseif (gettype($num)==="boolean") {
    echo "la variable es de tipo booleano<br>";
} elseif (gettype($num)==="double") {
    echo "la variable es de tipo doble<br>";
} else {
    echo "la variable es de otro tipo<br>";
}
?>
