<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <?php
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      $adem = "neilanpadilla5@gmail.com";
      $adpass = "newjeans";

      if($email == $adem && $pass == $adpass)
      {
        echo "<h1>hello user</<h1>";
      }
      else
      {
        echo "<h1>check email or password</<h1>";
      }
    ?>
  </body>
</html>
