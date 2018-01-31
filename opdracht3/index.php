<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BAP Opdracht 3</title>
  </head>
  <body>
    <?php
      $voornaam = 'Idriss';
      $leeftijd = 17;
      $woonplaats = 'Amsterdam';
      $hobby = 'Gamen';
      $opleiding = 'MediaDevelopment';

      if ($leeftijd >= 18) {
        echo "Jij bent oud genoeg om te drinken.";
      } else {
        echo "Jij bent te jong om te drinken.";
      }

      echo "<br>" . "ik ben " . $voornaam . " en ik ben " . $leeftijd . " jaar. " . "<br>" ." Ik woon in " . $woonplaats . "." . "<br>" . "Mijn hobby is " . $hobby . "." . "<br>" . "En ik doe de opleiding " . $opleiding . "." ;


     ?>
  </body>
</html>
