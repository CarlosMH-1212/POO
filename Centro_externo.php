<?php
<<<<<<< HEAD
class Centro_externo {
    private $flota_externa = [];
    private $centro_op;

    public function __construct(Centro_de_operaciones $centro_op) {
        $this->centro_op = $centro_op;
    }

    public function Ampliar_Flota_externa($vehiculo) {
        $this->flota_externa[] = $vehiculo;
    } 

    public function Agregar_Flota_externa() {
        $this->centro_op->Ampliar_Flota_multiple($this->flota_externa);
    } 
}
=======
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

    public function gestion_Flota(string $tipoClase, int $flota_necesaria){    
    $cant_flota = count(array_filter($this->flota, function($vehiculo) use ($tipoClase) {
            return $vehiculo instanceof $tipoClase;
        }));
       
        if ($cant_flota >= $flota_necesaria){
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

>>>>>>> 5f1b546fc931029e168355d3872fa25f733fcb2c
?>