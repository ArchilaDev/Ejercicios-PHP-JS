<?php
/*
Enunciado: Escribe una función de flecha que acepte base y altura para calcular
el área de un triángulo
*/
$base = $_POST['txtBase'];
$altura = $_POST['txtAltura']; //intente cambiar la variable pero siempre me sale el error de que no se a declarado


$calcular = fn($base, $altura) => "Su Area es: " . $base*$altura/2;

echo($calcular($base, $altura));

?>