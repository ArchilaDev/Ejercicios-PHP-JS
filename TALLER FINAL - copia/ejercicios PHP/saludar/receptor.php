<?php
/*
1. Enunciado: Crea una función de flecha que reciba un nombre y devuelva un saludo
personalizado. (tal vez esta las funciones flechas en el polisof o no pero quiero intentarlo aunque no este en php pero si en js)
*/
$nombre = $_POST['txtNombre'];

$saludar = fn($nombre) => "Hola ". $nombre;

echo($saludar($nombre));


?>