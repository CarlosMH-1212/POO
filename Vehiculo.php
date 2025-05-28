<?php

    abstract class Vehiculo {

    public $motor;
    public $chasis;
    public $carroceria;
    public $patente;    
    public $mantenimiento_R;

    public function __construct ($motor,$chasis,$carroceria,$patente,$mantenimiento_R){
      
       $this-> motor = $motor;
       $this-> chasis = $chasis;
       $this-> carroceria = $carroceria;
       $this-> patente = $patente;
       $this-> mantenimiento_R = $mantenimiento_R;
   
    }
abstract public function RealizarEntrega();

public function setMantenimiento($nuevo_Estado){
    $this->mantenimiento_R = $nuevo_Estado;
}

}

?>