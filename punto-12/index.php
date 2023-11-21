<?php
// DATOS DE ENTRADA
$num = 0;

// SOLICITAR DATOS DE ENTRADA AL USUARIO
echo "Digite el número a multiplicar: \n";
$num = readline();

// PROCESO CON BUCLE FOR
for ($i = 1; $i <= 30; $i++) {
    echo $num . " x " . $i . " = " . $num * $i . "\n";
}
?>