<?php
// DATOS DE ENTRADA
$i = 0;
$sum = 0;

// UTILIZAR FOR (BUCLE) PARA DEFINIR NÚMEROS MENORES A 101
for ($i = 1; $i <= 100; $i++) {

// SI EL RESIDUO (%) NO ES IGUAL A CERO, ENTONCES EL NÚMERO ES IMPAR
    if ($i % 2 != 0) {
      echo "$i \n";

      // INCREMENTAR EL CONTADOR
        $sum += $i;
    }
}

// DATOS DE SALIDA - SUMA DE NÚMEROS
echo "La suma de los números impares es: $sum";
?>
