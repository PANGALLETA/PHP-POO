<?php
    require_once("ClassEmpleado.php");
    require_once("ClassCliente.php");

    $objEmpleado = new Empleado(787878,"Julian Candamil",23);
    $objEmpleado->setPuesto("Administrador");

    echo $objEmpleado->getDatosPersonales();
    echo "Puesto: ".$objEmpleado->getPuesto();

    $objCliente = new Cliente(787465878,"Andres Candamil",22);
    $objCliente->setCredito(1000);
    
    echo $objCliente->getDatosPersonales();
    echo "Credito: ".$objCliente->getCredito();
?>