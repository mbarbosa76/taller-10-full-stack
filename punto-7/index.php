<?php
// DECLARAR DATOS DE ENTRADA
$numberOne = 0;
$numberTwo = 0;
$option = 0;
$result = 0;

echo "Ingrese el primer número: \n";
$numberOne = readline();

echo "Ingrese el segundo número: \n";
$numberTwo = readline();

// PROCESO
echo "(+) SUMAR \n";
echo "(-) RESTAR \n";
echo "(*) MULTIPLICAR \n";
echo "(/) DIVIDIR \n";
$option = readline();

switch ($option ) {
  case "+":
    $result = $numberOne + $numberTwo;
    break;
  case "-":
    $result = $numberOne - $numberTwo;
    break;
  case "*":
    $result = $numberOne * $numberTwo;
    break;
  case "/":
    $result = $numberOne / $numberTwo;
    break;
  default:
    echo "La operación digitada es inválida";
}
// SALIDA
echo "El resultado de la operación es: " . $result;
?>
