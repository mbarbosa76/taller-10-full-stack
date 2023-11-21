<?php
// FUNCIONES PARA REALIZAR LAS OPERACIONES ARITMÉTICAS
function sumar($number1, $number2) {
    return $number1 + $number2;
}

function restar($number1, $number2) {
    return $number1 - $number2;
}

function multiplicar($number1, $number2) {
    return $number1 * $number2;
}

function dividir($number1, $number2) {
    if ($number2 == 0) {
        return "Error: No se puede dividir por cero";
    } else {
        return $number1 / $number2;
    }
}
  ?>

  ///

  <?php
include "funtions.php";

// DECLARAR DATOS DE ENTRADA
$option = 0;
$num1 = 0;
$num2 = 0;

// SOLICITAR AL USUARIO LOS CÓDIGOS
echo "Digíte el primer número: ";
$num1 = readline();

echo "Digíte el segundo número: ";
$num2 = readline();

// SOLICITAR AL USUARIO SELECCIONAR LA OEPRACIÓN QUE DESEA REALIZAR
echo "Digite la operación, de acuerdo a:" . "\n";
echo "1 - SUMAR \n";
echo "2 - RESTAR \n";
echo "3 - MULTIPLICAR \n";
echo "4 - DIVIDIR \n";
echo "5 - SALIR \n";

$option = readline("Opción: ");

// REALIZAR LAS OEPRACIONES ARITMÉTICAS CON SWITCH
switch ($option) {
    case 1:
        echo "El resultado de la suma es: " . sumar($num1, $num2);
        break;
    case 2:
        echo "El resultado de la resta es: " . restar($num1, $num2);
        break;
    case 3:
        echo "El resultado de la multiplicación es: " . multiplicar($num1, $num2);
        break;
    case 4:
        echo "El resultado de la división es: " . dividir($num1, $num2);
        break;
    case 5:
        echo "Saliendo del programa. ¡Hasta pronto!. \n";
        break;
    default:
        echo "Operación no válida";
}
?>