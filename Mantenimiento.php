<?php 
class Mantenimiento {
    private $vehiculo;
    private $fecha;


    public function __construct(Vehiculo $vehiculo, $fecha) {
        $this->vehiculo = $vehiculo;
        $this->fecha = $fecha;
    }

   public function actualizarEstado($nuevoEstado){
        $this->vehiculo->setMantenimiento($nuevoEstado); // CORREGIDO: minúscula
    }

    public function mostrarResumen() {
        $tipoVehiculo = get_class($this->vehiculo);
        $patente = $this->vehiculo->getPatente();         // CORREGIDO: uso de getter
        $estado = $this->vehiculo->getMantenimiento();     // CORREGIDO: uso de getter
        echo "Vehículo Patente: {$patente}, Fecha: {$this->fecha}, Tipo: {$tipoVehiculo}, Estado: {$estado}, REALIZADO\n";
    }
}

?>