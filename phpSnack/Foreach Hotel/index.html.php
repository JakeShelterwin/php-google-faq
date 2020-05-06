<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SnackPHP</title>
  </head>
  <body>
    <!-- Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET. -->
    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    foreach ($hotels as $hotel => $value) {
      echo $hotels[$hotel]["name"]."<br />"
          .$hotels[$hotel]["description"]."<br /> voto: "
          .$hotels[$hotel]["vote"]."<br /> ------------<br /> ";
    }

    //I due metodi sono equivalenti ma meglio questo commentato
    // foreach ($hotels as $value) {
    //
    //   echo $value["name"]."<br />"
    //       .$value["description"]."<br /> voto: "
    //       .$value["vote"]."<br /> ------------<br /> ";
    //
    // }
?>

  </body>
</html>
