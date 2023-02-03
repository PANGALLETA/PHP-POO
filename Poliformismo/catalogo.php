<?php
    require_once("ClassMesa.php");

    $objCama = new Producto("Cama", 10500);
    $arrInfoProducto = $objCama->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoProducto);
    print_r('<pre>');

    $objMueble = new Mueble("Closet", 20500, "Casita", "Negro", "Madera");
    $arrInfoMueble = $objMueble->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoMueble);
    print_r('<pre>');

    $objMesa = new Mesa("Mesa de noche", 20800, "Nochesita", "Cafe", "Madera","2 mts");
    $objMesa->setForma("Cuadrada");
    $arrInfoMesa = $objMesa->getInfoProducto();

    print_r('<pre>');
    print_r($arrInfoMesa);
    print_r('<pre>');

    
?>