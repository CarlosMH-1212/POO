<?php
require_once ("Vehiculo.php");
require_once("Mantenimiento.php");
require_once("Camion.php");
require_once("Refrigerado.php");
require_once("Utilitario.php");
require_once("Centro_externo.php");
require_once("Centro_de_operaciones.php");



$Centro_OP = new Centro_de_operaciones();

$Vehiculo1 = new Camion("MotorDiesel", "ChasisFuerte", "CarroceriaGrande", "ABC123", "Roto");
$Centro_OP->Ampliar_Flota($Vehiculo1);

$Vehiculo2 = new Utilitario("MotorLigero", "ChasisMedio", "CarroceriaCompacta", "DEF456", "Arreglado");
$Centro_OP->Ampliar_Flota($Vehiculo2);

$Vehiculo3 = new Refrigerado("MotorFrio", "ChasisFrio", "CarroceriaFrigorifica", "GHI789", "Arreglado");
$Centro_OP->Ampliar_Flota($Vehiculo3);

echo $Vehiculo1->realizarEntrega() . "\n";
echo $Vehiculo2->realizarEntrega() . "\n";
echo $Vehiculo3->realizarEntrega() . "\n";






$Vehiculo_arreglado = new Mantenimiento($Vehiculo1,"13/05/25");

echo $Vehiculo_arreglado->actualizarEstado("Arreglado");


if ($Centro_OP->gestion_Flota("Camion",3) == "Flota insuficiente"){
    $Centro_externo = new Centro_externo;

    $Vehiculo4 = new Camion("MotorDiesel", "ChasisFuerte", "CarroceriaGrande", "ABC123", "Arreglado");
    $Centro_externo->Ampliar_Flota_externa($Vehiculo4);
    $Vehiculo5 = new Camion("MotorDiesel", "ChasisFuerte", "CarroceriaGrande", "ABC123", "Arreglado");
    $Centro_externo->Ampliar_Flota_externa($Vehiculo5);

    $Centro_externo->Agregar_Flota_externa();


}
else{
    echo $Centro_OP->gestion_Flota("Camion",3);
}





?>