<?php
include "operationUtils.php";

// DATOS DE ENTRADA
  $numberOne = 0;
  $numberTwo = 0;
  $option = "";

// 1. Llamar una función para pedir números
  $numberOne = getNumber();
  $numberTwo = getNumber();

//2. Llamar una función para mostrar el menú
  $option = showMenu();

// 3. Llamar una función para operar
  $result = operate($numberOne, $numberTwo, $option);

// 4. Mostrar el resultado
  echo "El resultado de la operación es: " . $result;

?>

***********

<?php
// Función para obtener el número
function getNumber() {
    echo "Digite el primer número: \n";
    return readline();
}

// Función para mostrar el menú y retornar respuesta
  function showMenu() {
    echo "Digíte el número de la operación que desea realizar: \n";
    echo "1. SUMAR\n";
    echo "2. RESTAR\n";
    echo "3. MULTIPLICAR\n";
    echo "4. DIVIDIR \n";
    return readline();
  }

// Función que realice la opración
 function operate($x, $y, $option) {
    switch ($option) {
      case '1':
        return add($x, $y);
      case '2':
        return sub($x, $y);
      case '3':
        return mult($x, $y);
      case '4':
        return div($x, $y);
      default:
        echo "Opción no válida";
        return 0;
    }
 }

// Función para sumar
 function add($x, $y) {
    return $x + $y;
 }

// Función para restar
 function sub($x, $y) {
    return $x - $y;
 }

// Función para multiplicar
 function mult($x, $y) {
    return $x * $y;
 }

// Función para dividir
 function div($x, $y) {
   if ($number2 == 0) {
       return "un error, o se puede dividir por cero";
   } else {
    return $x / $y;
 }
 }
?>