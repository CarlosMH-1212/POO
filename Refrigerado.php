<?php
require_once("Vehiculo.php");
require_once("producto.php");

class Refrigerado extends Vehiculo {
    public function RealizarEntrega($producto) {
        return "Refrigerado entregando "
             . $producto->getNombre()
             . " (" . $producto->getTipo() . ") con temperatura controlada.";
    }
}

?>