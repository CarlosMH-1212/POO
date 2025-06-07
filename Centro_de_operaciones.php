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

    public function asignarVehiculosAProductos($productos) {
    $resultado = [];

    foreach ($productos as $producto) {
        $asignado = false;
        foreach ($this->flota as $vehiculo) {
            if (method_exists($vehiculo, 'puedeTransportar') && $vehiculo->puedeTransportar($producto)) {
                $resultado[] = "El producto '" . $producto->getTipo() . "' será transportado por " . get_class($vehiculo) . " con patente " . $vehiculo->getPatente();
                $asignado = true;
                break;
            }
        }

        if (!$asignado) {
            $resultado[] = "No hay vehículo disponible para transportar el producto '" . $producto->getCategoria() . "'";
        }
    }

    return $resultado;
}
  
}

?>