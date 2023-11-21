<?php
//DECLARACIÓN DE VARIABLES DE ENTRADA
$age = 0;
$name = "";

// PROCESO
echo "Digíte su nombre: \n";
$name = readline ();

echo "Digíte su edad: \n";
$age = readline();

if ($age >= 18) {
    echo "Hola $name. Usted es mayor de edad.";
} else {
  echo "Hola $name. Usted es menor de edad.";
}
?>