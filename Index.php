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


$Producto1 = new Producto(1, "Pesado",      "Electrodomestico", 1200);
$Centro_OP->Almacenar_producto($Producto1);

$Producto2    = new Producto(2, "Liviano",  "Documentos",  50);
$Centro_OP->Almacenar_producto($Producto2);

$Producto3 = new Producto(3, "Refrigerado", "Medicamentos", 200);
$Centro_OP->Almacenar_producto($Producto3);


$gerente = new Gerente_logistica("12345678", "Juan", "Pérez");

$gerente->Coord_tareas_op($Centro_OP, $Logitrans);

$gerente->Aseg_efica_op($Centro_OP);


?>
