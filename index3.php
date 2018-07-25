<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
    $carattere = 'l';
    $testo2 = strtolower($testo);
    $count = 0;
    $long = strlen($testo2);


    for ($i=0; $i < $long; $i++) {
      if ($carattere==$testo2[$i]) {
        $count++;
      }
    }
    echo $count;

    ?>

  </body>
</html>
