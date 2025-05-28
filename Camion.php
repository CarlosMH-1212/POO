<?php
Require_Once ("Vehiculo.php");
class Camion extends Vehiculo {
    public function RealizarEntrega(){
        return "Camión realizando entrega de carga pesada a largas distancias.";
    }
}
?>