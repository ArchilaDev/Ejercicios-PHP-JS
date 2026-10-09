<?php

//ESTOS EJERCICIOS ESTAN EN SEMANA 1 JS 
/*20. Parqueadero
• Caso A (Auto > 4 horas):
o Entradas: Tipo = automovil, Minutos = 300 (5 horas)
o Salida: "Tarifa Larga Estancia Automóvil (20% Desc): $26400
COP."
• Caso B (Bicicleta por día > 1 hora):
o Entradas: Tipo = bicicleta, Minutos = 120, Esquema = dia
o Salida: "Tarifa Plena Día Bici: $3.000 COP.*/

$tipo_vehiculo = $_POST["txtTipo"];
$tiempo = $_POST["tiempo"];
$esquema = $_POST["esquema"];

$descuento = 0.20;

switch ($tipo_vehiculo) {

    case 'automovil':
        if ($tiempo > 240) {
            echo("Tarifa Larga Estancia Automovil (20% Desc): $26400 COP");
        }
        break;

    case 'bicicleta':
        if ($tiempo > 60 && $esquema == 'dia') {
            echo("Tarifa Plena Dia Bicicleta: $3.000 COP");
        }
        break;

    default:
        echo("Recuerda poner un tipo válido");
        break;
}
?>
