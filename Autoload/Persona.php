<?php
    abstract class Persona{
        public $intDpi;
        public $strNombre;
        public $intEdad;
        public $mensaje;
        
        function __construct(int $dpi, string $nombre, int $edad)
        {
            $this->intDpi = $dpi;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
        }

        /*public function getDatosPersonales()
        {
            $datos = "
            <h2>DATOS PERSONALES</h2>
            DPI: {$this->intDpi}<br>
            Nombre: {$this->strNombre}<br>
            Edad: {$this->intEdad}<br>
            ";
            return $datos;
        }*/
        abstract public function getDatosPersonales();
        abstract public function setMensaje(string $mensaje);
        abstract public function getMensaje():string;
    }
?>