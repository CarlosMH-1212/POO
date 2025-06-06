<?php

    abstract class Vehiculo {

    private $motor;
    private $chasis;
    private $carroceria;
    private $patente;    
    private $mantenimiento_R;

    public function __construct ($motor,$chasis,$carroceria,$patente,$mantenimiento_R){
      
       $this-> motor = $motor;
       $this-> chasis = $chasis;
       $this-> carroceria = $carroceria;
       $this-> patente = $patente;
       $this-> mantenimiento_R = $mantenimiento_R;
   
    }
abstract public function RealizarEntrega ($producto);

public function setMantenimiento($nuevo_Estado){
    $this->mantenimiento_R = $nuevo_Estado;
}

}

?>