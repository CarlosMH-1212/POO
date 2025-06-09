<?php
//require_once("Vehiculo.php");

class Utilitario extends Vehiculo {
    public function RealizarEntrega($producto) {
        return "Utilitario entregando ". $producto->getCategoria(). " (" . $producto->getTipo() . ") en zonas urbanas.";
    }


}
?>