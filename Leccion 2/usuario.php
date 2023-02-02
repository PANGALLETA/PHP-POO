<?php

    require_once("ClassUsuario.php");

    $objUsuario1 = new Usuario("Julian Candamil","admin@admin.com","admin");
    $objAndres = new Usuario("Andres Candamil","admin@admin.com","admin");

    echo $objUsuario1->getPerfil();
    echo "<br>";
    echo $objAndres->getPerfil();
    $objAndres->setCambiarClave("123456789");
    echo "<br>";
    echo $objAndres->getPerfil();

?>