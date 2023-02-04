<?php
trait Carrito
{
    public $strProducto;
    public $intCantidad;
    public function setCarrito(string $producto, int $caintidad)
    {
        $this->strProducto = $producto;
        $this->intCantidad = $caintidad;
    }
    abstract function getCarrito();
}
?>