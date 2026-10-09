<?php
/*
12. Multas de Tránsito
• Caso A (Pico y placa pago rápido):
o Entradas: Infracción = C14, Días = 3
o Salida: "Aplica 50% descuento con curso: $275000 COP."
• Caso B (SOAT vencido con patios):
o Entradas: Infracción = D02, Inmovilizado = si, Días patios = 3
o Salida: "Multa SOAT (
*/

$tipo_infraccion = $_POST["txtTipo"];
$dias = $_POST["dias"];

switch ($tipo_infraccion) {

    case 'C14':
        if ($dias <= 3) {
            echo("Aplica 50% descuento con curso: $275000 COP");
        }else{
            echo("Ocurrio un error, vuelva a intentarlo");
        }
        break;

    case 'D02':
        $inmovilizado = $_POST["inmovilizado"];
        $dias_patios = $_POST["dias_patios"];

        if ($inmovilizado == 'si') {
            echo("Multa SOAT vencido con patios por " . $dias_patios . " dias");
        }
        break;

    default:
        echo("Tipo de infraccion no valido");
        break;
}
?>
