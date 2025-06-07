<?php
class Centro_de_operaciones {
private $flota = [];


     public function Ampliar_Flota($vehiculo) {
        $this->flota[] = $vehiculo;
    }    

    public function Ampliar_Flota_multiple(array $vehiculos) {
    foreach ($vehiculos as $vehiculo) {
        $this->flota[] = $vehiculo;
    }
}

    public function gestion_Flota(Logitrans $logitrans){    
        $tipoClase = $logitrans->getTipoVehiculo();
        $flota_necesaria = $logitrans->getCantFlotaNecesaria();

        $cant_flota = count(array_filter($this->flota, function($vehiculo) use ($tipoClase) {
            return $vehiculo instanceof $tipoClase && $vehiculo->getEstado() === "Arreglado";
        }));
       
        if ($cant_flota >= $flota_necesaria){
            return "Flota suficiente";
        } else {
            return "Flota insuficiente";
        }
    }

    

    public function Almacenar_producto(){    
    return "Producto Almacenado";
    }

}

?>