<?php
require_once("Vehiculo.php");

class Camion extends Vehiculo {
    public function RealizarEntrega($producto) {
        return "Camión entregando ". $producto->getNombre(). " (" . $producto->getTipo() . ") a largas distancias.";
    }

}
?>
