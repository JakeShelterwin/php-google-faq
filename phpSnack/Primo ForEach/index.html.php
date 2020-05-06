<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SnackPHP</title>
  </head>
  <body>
    <!-- Stampare a schermo, attraverso il  foreach, tutti gli elementi passati in GET. -->
    <?php foreach ($_GET as $key => $value){
        echo "Chiave: ".$key."<br>"."Valore: ".$value."<br><br>";
    } ?>

  </body>
</html>
