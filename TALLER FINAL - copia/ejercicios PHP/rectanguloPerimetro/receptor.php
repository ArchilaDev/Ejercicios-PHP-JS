<?php
/*
Funciones Anónimas Tradicionales con Parámetros
1. Enunciado: Asigna una función anónima clásica a una variable para calcular el
perímetro de un rectángulo (ancho, largo).

*/

$ancho = $_POST["txtAncho"];
$largo = $_POST["txtLargo"];

$calcular = function($ancho, $largo){

    $resultado = ($ancho + $largo) * 2;

    return $resultado;

};

echo($calcular($ancho, $largo));
?>