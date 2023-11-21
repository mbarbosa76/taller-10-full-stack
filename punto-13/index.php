<?php
// DATOS DE ENTRADA
$numbers = array(10, 20, 30, 40, 50);
$sum = 0;

// DATOS DE SALIDA PARA EL ARREGLO FOREACH
foreach ($numbers as $num) {
    $sum += $num;
}

echo "La suma de los números del arreglo es: $sum";
?>
