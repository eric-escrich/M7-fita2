<?php
if (isset($_POST["color"])) {
   $colorFons = $_POST["color"];
}
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <title>Selector de Skins</title>
   <style>
      body {
         background-color:
            <?php echo $colorFons; ?>
         ;
      }

      ;
   </style>
</head>

<body>
   <h1>Selector de Skins</h1>
   <form method="post">
      <label for="color">Selecciona un color:</label>
      <select name="color" id="color">
         <option value="white">Blanc</option>
         <option value="red">Vermell</option>
         <option value="blue">Blau</option>
      </select>
      <input type="submit" value="Canviar color">
   </form>
</body>

</html>