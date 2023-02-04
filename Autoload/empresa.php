<?php
    //require_once("ClassEmpleado.php");
    //require_once("ClassCliente.php");
    require_once("autoload.php");

    $objEmpleado = new Empleado(787878,"Julian Candamil",23);
    $objEmpleado->setPuesto("Administrador");
    $objEmpleado->setMensaje("Bienvenido Empleado");
    
    echo $objEmpleado->getMensaje();
    echo $objEmpleado->getDatosPersonales();
    echo "Puesto: ".$objEmpleado->getPuesto();

    echo "<br><br>";

    $objCliente = new Cliente(787465878,"Andres Candamil",22);
    $objCliente->setCredito(1000);
    $objCliente->setMensaje("Bienvenido Cliente");
    
    echo $objCliente->getMensaje();
    echo $objCliente->getDatosPersonales();
    echo "Credito: ".$objCliente->getCredito();
?>