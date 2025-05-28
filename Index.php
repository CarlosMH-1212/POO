<?php
require_once ("Vehiculo.php");
require_once("Mantenimiento.php");
require_once("Camion.php");
require_once("Refrigerado.php");
require_once("Utilitario.php");
require_once("VehiculoExterno.php");

$Vehiculo1 = new Camion("MotorDiesel", "ChasisFuerte", "CarroceriaGrande", "ABC123", 1);
$Vehiculo2 = new Utilitario("MotorLigero", "ChasisMedio", "CarroceriaCompacta", "DEF456", 2);
$Vehiculo3 = new Refrigerado("MotorFrio", "ChasisFrio", "CarroceriaFrigorifica", "GHI789", 3);
echo $Vehiculo1->realizarEntrega() . "\n";
echo $Vehiculo2->realizarEntrega() . "\n";
echo $Vehiculo3->realizarEntrega() . "\n";

$departamento = new Mantenimiento($Vehiculo1,"13/05/25");

?>