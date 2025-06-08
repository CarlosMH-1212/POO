<?php
class Gerente_logistica {
    private $dni;
    private $nombre;
    private $apellido;
    

    public function __construct ($dni,$nombre,$apellido){
      
       $this-> dni = $dni;
       $this-> nombre = $nombre;
       $this-> apellido = $apellido;
 
    }
   

  public function Coord_tareas_op($Centro_OP, $Logitrans){
         $resultado_Gestion = $Centro_OP->gestion_Flota($Logitrans);
         
        if ($resultado_Gestion == "Flota insuficiente") {

            echo $resultado_Gestion."<br>";

            $Centro_externo = new Centro_externo($Centro_OP);

            $Vehiculo4 = new Camion("MotorDiesel", "ChasisFuerte", "CarroceriaGrande", "ABC123", "Arreglado");
            $Centro_externo->Ampliar_Flota_externa($Vehiculo4);

            $Vehiculo5 = new Camion("MotorDiesel", "ChasisFuerte", "CarroceriaGrande", "ABC123", "Arreglado");
            $Centro_externo->Ampliar_Flota_externa($Vehiculo5);

            $Centro_externo->Agregar_Flota_externa();

        } else {
            echo $resultado_Gestion . "<br>";
        }
    }



   public function Aseg_efica_op($Centro_OP) {
    $resultados = $Centro_OP->asignarVehiculosAProductos();

    foreach ($resultados as $linea) {
        echo $linea . "<br>";
    }
}
}
?>