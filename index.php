<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>GoogleFAQ</title>
  </head>
  <body>
    <!-- GOAL:
Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il "Database" e la visualizzazione di queste domande e risposte con PHP.
HINT:
Crearsi un array con i dati come l'ultimo esercizio visto a lezione (hotels) e usare un foreach per stampare i dati in esso contenuti -->
    <div class="navbarTop">
      <img src="logoGoogle.png" alt=""> <span> Privacy e termini</span>
      <div class="navigazione">
        <ul>
          <li>Introduzione</li>
          <li>Norme sulla privacy</li>
          <li>Termini di servizio</li>
          <li>Tecnologia</li>
          <li>Domande frequenti</li>
          <li>Account Google</li>
        </ul>

      </div>
    </div>
    <div class="container">
      <?php

      require_once "db.php";

      // foreach ($google as $elemento => $faq) {
      //   echo '<h1>'.$google[$elemento]["domanda"]."</h1>"
      //       .'<p>'.$google[$elemento]["risposta"]."</p>"
      //       ;
      // }

      //I due metodi ottengono lo stesso risultato, ma meglio questo perché sfrutta davvero il foreach
      foreach ($google as $faq) {
        echo $faq["domanda"].$faq["risposta"];
      }
      ?>

    </div>
    <footer>
      <div class="contenitoreFooter clearfix">
        <ul>
          <li>Google &#xb7;</li>
          <li>Tutto su Google &#xb7;</li>
          <li>Privacy &#xb7;</li>
          <li>Termini</li>
        </ul>
        <div class="sceltaLingua">
          <img src="popuplingua.png" alt="">
          <select class="selettoreLingua">
            <option value="italiano">Italiano</option>
            <option value="Inglese">Inglese</option>
            <option value="Vulcaniano">Vulcaniano</option>
            <option value="Bajoriano">Bajoriano</option>
          </select>
        </div>
      </div>

    </footer>

  </body>
</html>
