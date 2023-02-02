<?php
    require_once("ClassOperacion.php");

    $operacion1 = new Operacion(10, 2);
    $operacion2 = new Operacion(100, 3);

    $totalSuma = $operacion1->getSuma();
    echo "Total Suma:".$totalSuma;
    echo "<br>";

    $totalResta = $operacion1->getResta();
    echo "Total Resta:".$totalResta;
    echo "<br>";

    $totalMultiplicacion = $operacion1->getMultiplicacion();
    echo "Total Multiplicacion:".$totalMultiplicacion;
    echo "<br>";

    $totalDivision = $operacion1->getDivision();
    echo "Total Division:".$totalDivision;
    echo "<br><br>";

    $totalSuma = $operacion2->getSuma();
    echo "Total Suma:".$totalSuma;
    echo "<br>";

    $totalResta = $operacion2->getResta();
    echo "Total Resta:".$totalResta;
    echo "<br>";

    $totalMultiplicacion = $operacion2->getMultiplicacion();
    echo "Total Multiplicacion:".$totalMultiplicacion;
    echo "<br>";

    $totalDivision = $operacion2->getDivision();
    echo "Total Division:".$totalDivision;
    echo "<br>";
?>