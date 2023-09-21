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
      <input class="button" name="text" type="submit" value="Log In">
   </form>

</body>

</html>

<?php
if (isset($_POST["user"]) && isset($_POST["pwd"])) {
   $user = $_POST["user"];
   $pwd = $_POST["pwd"];

   echo 'Hola ' . $user;

}

?>