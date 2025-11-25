<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba examen</title>
</head>
<style>
    table{
        border: 1px black solid;
    }
    td{
        border: 1px black solid;
    }
</style>



<?php
//estructura array de las ventas diarias
$dias=[
    "Lunes"=>[
        ["platano",0.87,5],
        ["agua",0.47,3]
    ],
    "Martes"=>[
        ["donuts",2.50,3],
        ["donuts",2.50,1]
    ],
    "Miercoles"=>[
        ["platano", 0.87,2],
        ["donuts",2.50,1]
    ],
    "Jueves"=>[
        ["mollete",0.90,4],
        ["pimiento",0.45,1]
    ],
    "Viernes"=>[
        ["empanadilla",3,1],
        ["croisant",2,2]
    ],
    "Sabado"=>[
        ["uvas",1,3],
        ["barra",1,2]
    ],
    "domingo"=>[
        ["platano",0.87,5],
        ["manzana",0.47,3]
        ]
];
//esgtructura array productos dsiponibles
$almacen=[
    "frescos"=>[
        "estanteria1" => [["platano",4],["bacon",3]],
        "estanteria2" => [["manzana",2],["pera",7]],
        "estanteria3" => [["pimiento",0],["cebollas",23]]
    ],
    "panaderia"=>[
        "estanteria1" => [["viena",4],["barra",3]],
        "estanteria2" => [["mollete",2],["empanadilla",7]],
        "estanteria3" => [["donuts",0],["croisant",21]]
    ]
];
?>
<table>

<?php
//Evaluación del almacén
//array calves 
$producto_mayor_cantidad_almacen=0;
foreach($almacen as $secciones=>$seccion){
       
    echo"<tr><td>".$secciones."</td></tr>";
    foreach($seccion as $nombre_estanteria=>$productos){
  $total_producto=0;   
            echo"<tr><td>".$nombre_estanteria."</td></tr>";
            foreach($productos as $producto){
            echo"<tr><td>".$producto[0]."</td>";
            echo"<td>".$producto[1]."</td></tr>"; 
            $total_producto+=$producto[1];

                }
           echo"<tr><td>Total prodcutos x seccion </td><td>".$total_producto."</td>.</tr>";
           if($producto_mayor_cantidad_almacen<=$producto[1]){
            $producto_mayor_cantidad_almacen=$producto[1];
            $nombre_prod_mayor_cantidad=$producto[0];
           }
    }
 
}
echo "</table>";
echo "el prodcuto con mas cantidad total en todo el alacen es la/el $nombre_prod_mayor_cantidad con una cantidad total de : $producto_mayor_cantidad_almacen";
?>
<table>
    
<?php
//Registro y análisis de ventas
$productos_no_existentes_almacen=array();
$dia_mayor_fact=0;
foreach($dias as $dia=>$ventas){
    $dinero_dia=0;
    //cabecera por dia 
    echo"<tr><td>".$dia."</td></tr>";
    echo '    
    <tr>
        <td>NOMBRE PRODUCTO</td>
        <td>PRECIO</td>        
        <td>UNIDADES</td>
        <td>precio total</td>

    </tr>';
    //imprimo todos los productos que hay en un dia
    foreach($ventas as $venta){
        echo"<tr>";
        echo"<td>".$venta[0]."</td>";
        echo"<td>".$venta[1]."</td>";
        echo"<td>".$venta[2]."</td>";
        echo"<td>".($venta[1]*$venta[2])."</td>";
        echo"</tr>";
        //calculo eldinero que se hace en el dia 
        $dinero_dia+=($venta[1]*$venta[2]);        
        //13.Detectar si algún producto vendido no está presente en el almacén


    }

    echo"</tr>";
    //imprimo dinero por dia al final de la tbavla
    echo"<tr><td>dinero por dia</td><td>".$dinero_dia."</td></tr>";
    //compruneo cyaul es le dia que mas se factura
    if($dia_mayor_fact<=$dinero_dia){
        $dia_mayor_fact=$dinero_dia;
        $nombre_dia_mayor_fact=$dia;
    }
}
echo "</table>";
echo "el dia con mayor facturacion es $nombre_dia_mayor_fact con una facturazion de: $dia_mayor_fact";

?>
<table>

<?php
//Diagnóstico y estrategia comercial
function productos_comprados_no_existe($almacen,$dias){
    $compras_realizadas=array();
    //creo una array con los productos que se han vendido todos los dias
    foreach($dias as $dia=>$ventas){
        foreach($ventas as $venta){
            if(!isset($compras_realizadas[$venta[0]])){
                $compras_realizadas[]=$venta[0];
            }
        }
    }
    $producto_no_hay_almacen=array();
    //compruebo que todos los artiuclos estan dentro de la rray si no estan significa que no tengo en el almacen 
    foreach($almacen as $categorias=>$seccion){
            foreach($seccion as $estanteria=>$productos){
                foreach($productos as $producto){
                    if(!in_array($producto[0], $compras_realizadas)){
                        $producto_no_hay_almacen[]=$producto[0];
                    }
                }
            }
    }
    return $producto_no_hay_almacen;
}
//13.Detectar si algún producto vendido no está presente en el almacén
echo "<br>estos son los produtos que se han ciomprado que no esxitesn en el almaen<br>";
$array_productos_no_almacen=productos_comprados_no_existe($almacen,$dias);
foreach($array_productos_no_almacen as $nombre){
    echo"<table><tr><td>$nombre</td></tr></table>";

}
?>
