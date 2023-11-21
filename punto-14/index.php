<?php
  include "./passwordUtils.php";

 // DECLARACIÓN DATOS DE ENTRADA
  $password = "";

// PROCESO
echo "Digite la contraseña a registrar \n";
  $password = readline ();

  validPassword($password);

?>

// ***** function *****
<?php

function validPassword ($pass) {

  // VALIDAR SI LA CONTRASEÑA TIENE; ALMENOS, 8 CARACTÉRES
  if (strlen($pass) < 8) {
      echo "Error. La contraseña debe tener al menos 8 caracteres";
      return true;
  }

  // VALIDAR SI LA CONTRASEÑA TIENE ALMENOS UNA LETRA MAYÚSCULA
  if (!preg_match('/[A-Z]/', $pass)) {
      echo "Error. La contraseña debe tener al menos una letra mayúscula";
      return true;
  }

  // VALIDAR SI LA CONTRASEÑA TIENE ALMENOS UNA LETRA MINÚSCULA
  if (!preg_match('/[0-9]/', $pass)) {
      echo "Error. La contraseña debe tener al menos un número";
      return true;
  }

  echo "Felicitaciones. La contraseña es segura";
}
  ?>
