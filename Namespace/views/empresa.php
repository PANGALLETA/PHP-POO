<?php
    /*require_once("../controllers/Empleado.php");
    require_once("../controllers/Cliente.php");
    require_once("../controllers/Persona.php");*/
    require_once("../autoload.php");
    use Controllers\Empleado;
    use Controllers\Cliente;
    use Controllers\Persona;

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

    echo "<br><br>";

    $mensaje = new Persona();
    echo $mensaje->saludar();
?>