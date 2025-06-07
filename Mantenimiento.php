<?php 
class Mantenimiento {
    private $vehiculo;
    private $fecha;

    public function __construct(Vehiculo $vehiculo, $fecha) {
        $this->vehiculo = $vehiculo;
        $this->fecha = $fecha;
    }

    public function actualizarEstado($nuevoEstado){
        $this->vehiculo->setEstado($nuevoEstado);
    }

    public function mostrarResumen() {
        $tipoVehiculo = get_class($this->vehiculo);
        echo "Vehículo Patente: {$this->vehiculo->getPatente()}, Fecha: {$this->fecha}, Tipo: {$tipoVehiculo}, Estado: {$this->vehiculo->getEstado()}, REALIZADO\n";
    }
}
?>
