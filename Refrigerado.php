<?php
require_once("Vehiculo.php");

class Refrigerado extends Vehiculo {
    public function RealizarEntrega($producto) {
        return "Refrigerado entregando ". $producto->getNombre(). " (" . $producto->getTipo() . ") con temperatura controlada.";
    }

}
?>