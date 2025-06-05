
<?php
require_once ("Vehiculo.php");
require_once("Mantenimiento.php");
require_once("Camion.php");
require_once("Refrigerado.php");
require_once("Utilitario.php");
require_once("VehiculoExterno.php");
require_once("Centro_de_operaciones.php");
$Centro_OP = new Centro_de_operaciones(3);

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




?>