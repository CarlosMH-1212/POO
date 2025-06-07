<?php
abstract class Vehiculo {
    protected string $motor;
    protected string $chasis;
    protected string $carroceria;
    protected string $patente;

    protected string $estado;

    public function __construct(
        string $motor,
        string $chasis,
        string $carroceria,
        string $patente,
        string $estado = 'SinInfo'
    ) {
        $this->motor      = $motor;
        $this->chasis     = $chasis;
        $this->carroceria = $carroceria;
        $this->patente    = $patente;
        $this->estado     = $estado;
    }

    public function getEstado(): string {
        return $this->estado;
    }

    public function setEstado(string $nuevoEstado): void {
        $this->estado = $nuevoEstado;
    }

    public function getPatente() {
    return $this->patente;
}


}
?>
