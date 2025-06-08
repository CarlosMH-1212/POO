<?php
class Centro_de_operaciones {
private $flota = [];
private $productos = [];

     public function Ampliar_Flota($vehiculo) {
        $this->flota[] = $vehiculo;
    }    

    public function Ampliar_Flota_multiple(array $vehiculos) {
    foreach ($vehiculos as $vehiculo) {
        $this->flota[] = $vehiculo;
    }
    }

    public function Almacenar_producto($productos){
        $this->productos[] = $productos;
    }



    public function gestion_Flota(Logitrans $logitrans){    
        $tipoClase = $logitrans->getTipoVehiculo();
        $flota_necesaria = $logitrans->getCantFlotaNecesaria();

    foreach ($this->flota as $vehiculo) {
        if ($vehiculo instanceof $tipoClase && $vehiculo->getEstado() == "Roto") {
            $Centro_Mantenimiento = new Mantenimiento($vehiculo, date("d/m/y"));
            $Centro_Mantenimiento->actualizarEstado("Arreglado");
            $Centro_Mantenimiento->mostrarResumen();
        }
    }


        $cant_flota = count(array_filter($this->flota, function($vehiculo) use ($tipoClase) {
            return $vehiculo instanceof $tipoClase && $vehiculo->getEstado() == "Arreglado";
        }));
       
        if ($cant_flota >= $flota_necesaria){
            return "Flota suficiente";
        } else {
            return "Flota insuficiente";
        }
    }


public function asignarVehiculosAProductos() {
    $resultado = [];

    foreach ($this->productos as $producto) {
        $asignado = false;

        foreach ($this->flota as $vehiculo) {
            $vehiculoClase = get_class($vehiculo);
            $tipoProducto = $producto->getTipo();

            if (
                ($tipoProducto == "Pesado" && $vehiculoClase == "Camion") ||
                ($tipoProducto == "Liviano" && $vehiculoClase == "Utilitario") ||
                ($tipoProducto == "Refrigerado" && $vehiculoClase == "Refrigerado")
            ) {
                $resultado[] = $vehiculo->RealizarEntrega($producto);
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