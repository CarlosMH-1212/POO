<?php
class Logitrans {
    private $cant_flota_necesaria;
    private $Tipo_vehiculo;
    

     public function __construct ($cant_flota_necesaria,$Tipo_vehiculo){
      
       $this-> cant_flota_necesaria = $cant_flota_necesaria;
       $this-> Tipo_vehiculo = $Tipo_vehiculo;
 
    }

    public function getCantFlotaNecesaria(){
        return $this->cant_flota_necesaria;
    }

    public function getTipoVehiculo(){
        return $this->Tipo_vehiculo;
    }

    }

?>