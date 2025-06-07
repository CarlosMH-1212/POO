<?php
abstract class Vehiculo {
    private  $motor;
    private  $chasis;
    private  $carroceria;
    private  $patente;

    protected string $estado;

    public function __construct(
         $motor,
         $chasis,
         $carroceria,
         $patente,
         $estado = 'SinInfo') {
        $this->motor      = $motor;
        $this->chasis     = $chasis;
        $this->carroceria = $carroceria;
        $this->patente    = $patente;
        $this->estado     = $estado;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado(string $nuevoEstado) {
        $this->estado = $nuevoEstado;
    }

    public function getPatente() {
    return $this->patente;
}


}
?>
