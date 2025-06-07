<?php
require_once("Vehiculo.php");
require_once("Mantenimiento.php");
require_once("Camion.php");
require_once("Refrigerado.php");
require_once("Utilitario.php");
require_once("Centro_externo.php");
require_once("Centro_de_operaciones.php");
require_once("producto.php");
require_once("Gerente_logistica.php");
require_once("Logitrans.php");

$Logitrans = new Logitrans(3,"Camion");

$Centro_OP = new Centro_de_operaciones();

$Vehiculo1 = new Camion("MotorDiesel", "ChasisFuerte", "CarroceriaGrande", "ABC123", "Roto");
$Centro_OP->Ampliar_Flota($Vehiculo1);

$Vehiculo2 = new Utilitario("MotorLigero", "ChasisMedio", "CarroceriaCompacta", "DEF456", "Arreglado");
$Centro_OP->Ampliar_Flota($Vehiculo2);

$Vehiculo3 = new Refrigerado("MotorFrio", "ChasisFrio", "CarroceriaFrigorifica", "GHI789", "Arreglado");
$Centro_OP->Ampliar_Flota($Vehiculo3);


$electro = new Producto(1, "Electrodomésticos",      "Pesado", 1200);
$docu    = new Producto(2, "Documentación urgente",  "Liviano",          50);
$vacunas = new Producto(3, "Vacunas",                "Refrigerado",   200);

echo $Vehiculo1->RealizarEntrega($electro) . "<br>";
echo $Vehiculo2->RealizarEntrega($docu) . "<br>";
echo $Vehiculo3->RealizarEntrega($vacunas) . "<br>";


$Centro_Mantenimiento = new Mantenimiento($Vehiculo1,"13/05/25");

echo $Centro_Mantenimiento->actualizarEstado("Arreglado");

$gerente = new Gerente_logistica("12345678", "Juan", "Pérez");

$gerente->Coord_tareas_op($Centro_OP,$Logitrans);





?>