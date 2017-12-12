<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $genre= 'femme';
    $age= 30;

    if ($genre == 'femme' AND $age >= 18) {
      echo 'Vous êtes une femme et vous êtes majeur';
    }

    elseif($genre != 'femme' AND $age >= 18) {
      echo 'Vous êtes un homme et vous êtes majeur';
    }

    elseif($genre == 'femme' AND $age < 18) {
      echo 'Vous êtes une femme et vous êtes mineur';
    }
    elseif($genre != 'femme' AND $age < 18) {
      echo 'Vous êtes un homme et vous êtes mineur';
    }

     ?>
  </body>
</html>
