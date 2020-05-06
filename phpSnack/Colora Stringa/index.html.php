<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SnackPHP2</title>
  </head>
  <body>
    <!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->
    <?php
    $password=$_GET["password"];
    // echo $password;

    if ($password === "boolean" || $password === "Boolean"|| $password === "BOOLEAN"){
      echo '<span style="color: green;">'.$password.'</span>';
    } else {
      echo '<span style="color: red;">'.$password.'</span>';
    }

    ?>

  </body>
</html>
