<?php 
     
    abstract class Vehiculo {

    public $motor;
    public $chasis;
    public $carroceria;
    public $patnete;    
    public $id;
    
    public function __construct ($motor,$chasis,$carroceria,$patente,$id){
      
       $this-> motor = $motor;
       $this-> chasis = $chasis;
       $this-> carroceria = $carroceria;
       $this-> patente = $patente;
       $this-> id = $id;     
    }
abstract public function RealizarEntrega();
}



?>