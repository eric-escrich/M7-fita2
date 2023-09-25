<?php
if (isset($_POST["quantitat"])) {
   $quantitat = $_POST["quantitat"];

   for ($i = 1; $i <= $quantitat; $i++) {
      echo "<br>\n<a href='ex22pagina3.php?quantitat=$i'>Comanda $i</a>";
   }
}


?>