<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $array = [];

    for ($i=0; $i < 15; $i++) {
      $randomnum = rand(1,50);
      if (!in_array($randomnum, $array)) {
        $array[] = $randomnum;
      }
      else {
        $i--;
      }
    }

    foreach($array as $number){
      echo $number.'-';
    }


    ?>



  </body>
</html>
