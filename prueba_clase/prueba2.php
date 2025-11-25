<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Examen</title>
    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        td, th {
            border: 1px solid black;
            padding: 5px 10px;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<?php
// Estructura de ventas diarias
$dias = [
    "Lunes" => [["platano",0.87,5],["agua",0.47,3]],
    "Martes" => [["donuts",2.50,3],["donuts",2.50,1]],
    "Miercoles" => [["platano",0.87,2],["donuts",2.50,1]],
    "Jueves" => [["mollete",0.90,4],["pimiento",0.45,1]],
    "Viernes" => [["empanadilla",3,1],["croisant",2,2]],
    "Sabado" => [["uvas",1,3],["barra",1,2]],
    "Domingo" => [["platano",0.87,5],["manzana",0.47,3]]
];

// Estructura de productos disponibles
$almacen = [
    "frescos" => [
        "estanteria1" => [["platano",4],["bacon",3]],
        "estanteria2" => [["manzana",2],["pera",7]],
        "estanteria3" => [["pimiento",0],["cebollas",23]]
    ],
    "panaderia" => [
        "estanteria1" => [["viena",4],["barra",3]],
        "estanteria2" => [["mollete",2],["empanadilla",7]],
        "estanteria3" => [["donuts",0],["croisant",21]]
    ]
];

// Evaluación del almacén
echo "<h2>Evaluación del almacén</h2>";
echo "<table>";
echo "<tr><th>Sección</th><th>Estantería</th><th>Producto</th><th>Cantidad</th></tr>";

$producto_mayor_cantidad_almacen = 0;
$nombre_prod_mayor_cantidad = "";

foreach($almacen as $seccion => $estanterias) {
    foreach($estanterias as $nombre_estanteria => $productos) {
        $total_producto = 0;
        foreach($productos as $producto) {
            echo "<tr>
                    <td>$seccion</td>
                    <td>$nombre_estanteria</td>
                    <td>{$producto[0]}</td>
                    <td>{$producto[1]}</td>
                 </tr>";
            $total_producto += $producto[1];

            if($producto[1] > $producto_mayor_cantidad_almacen) {
                $producto_mayor_cantidad_almacen = $producto[1];
                $nombre_prod_mayor_cantidad = $producto[0];
            }
        }
        echo "<tr><td colspan='3'><b>Total productos en $nombre_estanteria</b></td><td><b>$total_producto</b></td></tr>";
    }
}
echo "</table>";

echo "<p><b>El producto con más cantidad total en todo el almacén es '$nombre_prod_mayor_cantidad' con una cantidad total de: $producto_mayor_cantidad_almacen</b></p>";

// Registro y análisis de ventas
echo "<h2>Registro y análisis de ventas</h2>";
$dia_mayor_fact = 0;
$nombre_dia_mayor_fact = "";

foreach($dias as $dia => $ventas) {
    echo "<h3>$dia</h3>";
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th><th>Unidades</th><th>Total</th></tr>";

    $dinero_dia = 0;

    foreach($ventas as $venta) {
        $total = $venta[1] * $venta[2];
        echo "<tr>
                <td>{$venta[0]}</td>
                <td>{$venta[1]}</td>
                <td>{$venta[2]}</td>
                <td>$total</td>
             </tr>";
        $dinero_dia += $total;
    }

    echo "<tr><td colspan='3'><b>Total día</b></td><td><b>$dinero_dia</b></td></tr>";
    echo "</table>";

    if($dinero_dia > $dia_mayor_fact) {
        $dia_mayor_fact = $dinero_dia;
        $nombre_dia_mayor_fact = $dia;
    }
}

echo "<p><b>El día con mayor facturación es $nombre_dia_mayor_fact con una facturación de: $dia_mayor_fact €</b></p>";

// Diagnóstico y estrategia comercial
echo "<h2>Diagnóstico y estrategia comercial</h2>";
//13
function productos_comprados_no_existe($almacen, $dias) {
    $compras_realizadas = [];
    foreach($dias as $ventas) {
        foreach($ventas as $venta) {
            if(!in_array($venta[0], $compras_realizadas)) {
                $compras_realizadas[] = $venta[0];
            }
        }
    }

    // Reunir todos los productos del almacén
    $productos_almacen = [];
    foreach($almacen as $seccion => $estanterias) {
        foreach($estanterias as $nombre_estanteria => $productos) {
            foreach($productos as $producto) {
                if(!in_array($producto[0], $productos_almacen)) {
                    $productos_almacen[] = $producto[0];
                }
            }
        }
    }

    // Comparar y devolver los productos vendidos que no existen en el almacén
    $productos_no_en_almacen = [];
    foreach($compras_realizadas as $producto_vendido) {
        if(!in_array($producto_vendido, $productos_almacen)) {
            $productos_no_en_almacen[] = $producto_vendido;
        }
    }

    return $productos_no_en_almacen;
}

//13.Detectar si algún producto vendido no está presente en el almacén
echo "<br>estos son los produtos que se han ciomprado que no esxitesn en el almaen<br>";
$array_productos_no_almacen=productos_comprados_no_existe($almacen,$dias);
foreach($array_productos_no_almacen as $nombre){
    echo"<table><tr><td>$nombre</td></tr></table>";

}
//14
function vendidos_menos_20_almacen($dias, $almacen) {
    // 1. Reunimos los nombres de todos los productos vendidos
    $productos_vendidos = [];
    foreach($dias as $ventas_dia){
        foreach($ventas_dia as $venta){
            $productos_vendidos[]=$venta[0];
        }
    }

    // 2. Revisamos el almacén
    foreach($almacen as $seccion => $estanterias) {
        foreach($estanterias as $nombre_estanteria => $productos) {
            foreach($productos as $producto) {
                $nombre = $producto[0];
                $cantidad = $producto[1];

                if(in_array($nombre, $productos_vendidos)){
                    if($cantidad < 20) {
                        echo "El producto '$nombre' (sección $seccion, $nombre_estanteria) tiene solo $cantidad unidades.<br>";
                    }
                }
            }
        }
    }
}
vendidos_menos_20_almacen($dias, $almacen);

//15. Calcular la ratio de reposición necesario por producto (si se vendieron más unidades que las disponibles, mostrar cuánto habría que reponer). 

function ratio_reposicion($dias, $almacen){
    foreach($dias as $dia){
        foreach($dia as $secciones){
            foreach($secciones as $seccion){
                
            }
        }
    }
}

?>

</body>
</html>
