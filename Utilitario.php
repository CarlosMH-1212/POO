<?php
require_once("Vehiculo.php");
require_once("producto.php");

class Utilitario extends Vehiculo {
    public function RealizarEntrega($producto) {
        return "Utilitario entregando ". $producto->getNombre(). " (" . $producto->getTipo() . ") en zonas urbanas.";
    }
}
?>