<?php
require_once("Producto.php");
require_once("Carrito.php");
class Tienda
{
    use Producto, Carrito;
    public $ftlTotal = 0;
    public function getCarrito()
    {
        $this->ftlTotal = $this->fltPrecio * $this->intCantidad;
        $strCarrito = "
            <h2>Carrito</h2>
            <hr>
            Producto: {$this->strProducto} <br>
            Cantidad: {$this->intCantidad} <br>
            Precio: {$this->fltPrecio} <br>
            Total: {$this->ftlTotal} <br>
        ";
        return $strCarrito;
    }
}
?>