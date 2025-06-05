<?php
class Centro_de_operaciones {
private $flota = [];


     public function Ampliar_Flota($vehiculo) {
        $this->flota[] = $vehiculo;
    }    

    public function gestion_Flota(string $tipoClase, int $flota_necesaria){    
    $cant_flota = count(array_filter($this->flota, function($vehiculo) use ($tipoClase) {
            return $vehiculo instanceof $tipoClase;
        }));
       
        if ($cant_flota >= $this->flota_necesaria){
            return "Flota suficiente";
        }
        else{
            return "Flota insuficiente";
        }
    }



    public function Almacenar_producto(){    
    return "Producto Almacenado";
    }

}

?>