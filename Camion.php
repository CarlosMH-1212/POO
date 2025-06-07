<?php
require_once("Vehiculo.php");

class Camion extends Vehiculo {
    public function RealizarEntrega($producto) {
        return "Camión entregando ". $producto->getNombre(). " (" . $producto->getTipo() . ") a largas distancias.";
    }

    public function puedeTransportar($producto) {
        return $producto->getTipo() === "Pesado";
    }
}
?>
