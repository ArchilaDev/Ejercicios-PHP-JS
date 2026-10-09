<?php
/*
20. Simulación de Amortización de Deuda y Cuotas: Solicita el monto de un
préstamo, el número de cuotas mensuales y la tasa de interés. Ejecuta un ciclo for
desde la cuota 1 hasta la cuota final. Calcula la cuota de capital fija y el interés
decreciente sobre el saldo. Añade un condicional doble simulado: cada 4 cuotas
añade un recargo por pago extemporáneo ($25.000 COP). Imprime la tabla
detallada de amortización saldo a saldo.
*/
$monto = $_POST["monto"];
$cuotas = $_POST["cuotas"];
$tasa = $_POST["tasa"];

$capital = $monto / $cuotas;
$saldo = $monto;


for ($i = 1; $i <= $cuotas; $i++) {

    $interes = $saldo * $tasa / 100;

    $recargo = 0;

    if ($i % 4 == 0) {
        $recargo = 25000;
    }

    $total_cuota = $capital + $interes + $recargo;

    $saldo = $saldo - $capital;


}

    echo("Cuota <br>" . $i . "<br> Capital <br>" . $capital . "<br> Interes <br>" . $interes . "<br> Recargo <br>" . $recargo . "<br> Total cuota <br>" . $total_cuota . "<br> Saldo pendiente <br>" . $saldo );

?>
