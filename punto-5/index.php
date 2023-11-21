<?php
// DATOS DE ENTRADA
const TICKET_PRICE = 25000;
$membershipType = ""; 
$personNumber = 0;

// DATOS DE SALIDA
echo "Ingrese el tipo de afiliación: ";
$membershipType = readline();

echo "Ingrese el número de personas: ";
$personNumber = readline();

$totalPay = $personNumber * TICKET_PRICE;

//PROCESO
if (strtoupper($membershipType) == 'A' || strtoupper($membershipType) == 'B') {
    
  $discount = 0.3 * $totalPay;
  $totalWithDiscount = $totalPay - $discount;
  echo "El tipo de afiliación tiene el 30% de descuento. El valor a pagar es: $totalWithDiscount";

} else {
  echo "El tipo de afiliación no tiene descuento. El valor a pagar es: $totalPay";
}

?>