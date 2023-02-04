<?php
require_once("ClassTienda.php");

$objProducto = new Tienda();

$strProducto = "Teclado";
$ftlPrecio = 110;
$intStock = 15;

$intCantidadVendida = 3;

$objProducto->setProducto($strProducto, $ftlPrecio, $intStock);
echo $objProducto->getProducto();

$objProducto->setCarrito($strProducto, $intCantidadVendida);
$objProducto->setStock(2);
echo $objProducto->getProducto();

echo $objProducto->getCarrito();
?>