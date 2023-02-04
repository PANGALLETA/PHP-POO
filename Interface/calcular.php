<?php
    require_once("ClassOperacion.php");

    $objRaiz = new Calcular();

    echo $objRaiz->raiCuadrada(9);
    echo "<br>";
    echo $objRaiz->potencia(9,2);

    echo "<br>";
    echo $objRaiz->op_basica(9,2,'+');
?>