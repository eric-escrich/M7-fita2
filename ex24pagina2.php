<?php
if (isset($_POST["pwd1"]) && isset($_POST["pwd2"])) {
   $pwd1 = $_POST["pwd1"];
   $pwd2 = $_POST["pwd2"];
}

if (!$pwd1 == $pwd2) {
   echo "ERROR: les contrasenyes han de coincidir";
} else {
   $num = false;
   for ($i = 0; $i < strlen($pwd1); $i++) {
      if (is_numeric($pwd1[$i])) {
         $num = true;
         break;
      }
   }
   if ($num == false) {
      echo "ERROR: la contrasenya ha de tenir al menys un número";
   } else {
      echo "Contrasenya correcte";
   }
}
?>