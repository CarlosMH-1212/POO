<?php
require_once ("Vehiculo.php");
class VehiculoExterno extends Vehiculo {
    public function realizarEntrega() {
        echo "Entrega con vehículo externo contratado\n";
    }
}
?>