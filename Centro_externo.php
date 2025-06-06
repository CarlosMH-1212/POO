<?php
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
?>