<?php 
class Mantenimiento {
    private $vehiculo;
    private $fecha;


    public function __construct(Vehiculo $vehiculo, $fecha) {
        $this->vehiculo = $vehiculo;
        $this->fecha = $fecha
    }

    public function actualizarEstado($nuevoEstado){
        $this->vehiculo->setMantenimiento($nuevoEstado);
    }


    public function mostrarResumen() {
        $tipoVehiculo = get_class($this->vehiculo);
        echo "Vehículo Patente: {$this->vehiculo->patente}, Fecha: {$this->fecha}, Tipo: {$tipoVehiculo}, Estado: {$this->estado}, REALIZADO\n";
    }
}

?>