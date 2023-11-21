<?php
// DATOS DE ENTRADA
const FIRST_NUMBER = 10;
$secondNumber = 70;

$add = FIRST_NUMBER + $secondNumber;

// DATOS DE SALIDA
echo "La suma de la constante " . FIRST_NUMBER . " + la variable " . $secondNumber . " es: ". $add . "\n";

$secondNumber = 80;
$add = FIRST_NUMBER + $secondNumber;

echo "La suma de la constante " . FIRST_NUMBER . " + la variable " . $secondNumber . " es: ". $add . "\n";

?>