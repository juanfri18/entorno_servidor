<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <style>
        .producto {
      background-color: white;
      border-radius: 10px;
      padding: 20px;
      width: 250px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      text-align: left;
    }
  </style>
<?php
    $product1=array( "nombre"=>"Monitor", "precio"=>199.00, "descripcion"=>"pantalla de 79 pulgadas con full 4k y 300 hz");
    $product2=array("nombre"=>"teclado profesional", "precio"=>99.99, "descripcion"=>"teclado con luces y co teclas ultrasilenciosas");
    $product3=array("nombre"=>"iphone 17 promax", "precio"=>1457.24, "descripcion"=>"bateria 7200kw ,pantalla 10.2 pulgadas ");
    // Creamos un array con todos los productos
$productos = [$product1, $product2, $product3];

// Recorremos y mostramos cada producto
foreach ($productos as $prod) {
    echo "<div class='producto'>";
    echo "<h2>{$prod['nombre']}</h2>";
    echo "<p><strong>Precio:</strong> {$prod['precio']} €</p>";
    echo "<p><strong>Descripción:</strong> {$prod['descripcion']}</p>";
    echo "</div><br>";
}
?>
