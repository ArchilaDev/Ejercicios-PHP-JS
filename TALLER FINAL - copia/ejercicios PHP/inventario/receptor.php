<?php

/*Procesamiento de Liquidación de Nómina:
Solicita el número de empleados a liquidar. Con un ciclo while, lee el salario base y
modalidad (Presencial, Teletrabajo, Remoto). Mediante un switch, asigna el
auxilio de transporte ($162.000 COP) según corresponda (<= 2 SMLMV en
presencial). Descuenta el 8% de seguridad social y calcula el desembolso total de la
empresa.*/
$empleados = $_POST["empleados"];

$i = $empleados;
while ($i <= $empleados) {

    $salario = $_POST["salario"];
    $modalidad = $_POST["modalidad"];

    $auxilio = 0;

    switch ($modalidad) {

        case 'Presencial':

            if ($salario <= 2 * 1423500) {
                $auxilio = 162000;
                
            }
            break;

        case 'Teletrabajo':
            $auxilio = 0;
            break;

        case 'Remoto':
            $auxilio = 0;
            break;

        default:
            echo("Modalidad no valida<br>");
            break;
    }

        
        $seguridad_social = $salario * 0.08;

        $total_empresa = $salario + $auxilio;

        $salario_neto = $salario + $auxilio - $seguridad_social;

        echo("Empleado " . $i . "<br>");
        echo("Salario base: $" . $salario . " COP<br>");
        echo("Auxilio de transporte: $" . $auxilio . " COP<br>");
        echo("Descuento seguridad social: $" . $seguridad_social . " COP<br>");
        echo("Salario neto: $" . $salario_neto . " COP<br>");
        echo("Desembolso total empresa: $" . $total_empresa . " COP<br><br>");
    $i++;
}

?>