<?php
$camion = new Camion("MotorDiesel", "ChasisFuerte", "CarroceriaGrande", "ABC123", 1);
$utilitario = new Utilitario("MotorLigero", "ChasisMedio", "CarroceriaCompacta", "DEF456", 2);
$refrigerado = new Refrigerado("MotorFrio", "ChasisFrio", "CarroceriaFrigorifica", "GHI789", 3);
echo $camion->realizarEntrega() . "\n";
echo $utilitario->realizarEntrega() . "\n";
echo $refrigerado->realizarEntrega() . "\n";

$departamento = new DepartamentoMantenimiento();

$m1 = new Mantenimiento($vehiculo1, "2025-06-01", "Revisión general");
$m2 = new Mantenimiento($vehiculo2, "2025-06-05", "Cambio de ruedas");

?>