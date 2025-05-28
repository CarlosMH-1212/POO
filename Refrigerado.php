<?php
class Refrigerado extends Vehiculo{
    public function RealizarEntrega(){    
    return "Refirigerado (ID: $this->id): Realizando entrega productos climatizados";
    }
}
?>