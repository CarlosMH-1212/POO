<?php
require_once("Vehiculo.php");

class Refrigerado extends Vehiculo {
    public function RealizarEntrega($producto) {
        return "Refrigerado entregando ". $producto->getCategoria(). " (" . $producto->getTipo() . ") con temperatura controlada.";
    }

}
?>