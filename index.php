<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il "Database" e la visualizzazione di
queste domande e risposte con PHP. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google Faq</title>
    <?php

      include "data.php";
      include "helper.php";


    ?>
  </head>
  <body>

    <?php

    foreach ($arr as $domrisp) {

        ?>

        <h2><?php echo $domrisp['domanda'] ?></h2>
        <h4><?php echo $domrisp['risposta'] ?></h4>

        <?php

    }

    ?>

  </body>
</html>
