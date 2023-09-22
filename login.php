<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

   <h3>Log In</h3>
   <form action="login.php" method="POST">
      <div class="formElement">
         <!-- <label for="user">UserName</label> -->
         <input type="text" class="input" name="user" placeholder="Username" required><br>
      </div>
      <div class="formElement">
         <!-- <label for="pwd1">Password</label> -->
         <input type="password" class="input" name="pwd" placeholder="Password" required><br>
      </div>
      <br>
      <input class="button" name="text" type="submit" value="Log In">
   </form>

</body>

</html>

<?php
$users = [["pepe", "123"], ["ramon", "456"]];
if (isset($_POST["user"]) && isset($_POST["pwd"])) {
   $user = $_POST["user"];
   $pwd = $_POST["pwd"];
   $missatge = "";
   $credencialesCorrectas = false;

   for ($i = 0; $i < count($users); $i++) {
      if (($users[$i][0] == $user) && ($users[$i][1] == $pwd)) {
         $missatge = 'Hola ' . $user;
         $credencialesCorrectas = true;
         break;
      }
   }

   if (!$credencialesCorrectas) {
      $missatge = "Credenciales incorrectas";
   }

   echo '<br><br>' . $missatge;

} else {
   echo 'No has introducido las credenciales';
}


?>