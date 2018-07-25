<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $date = [
      '01/02/2018' => [
        'post1' => '01 -Lorem ipsum dolor sit amet',
        'post2' => '02 - post n2'
      ],
      '10/02/2018' => [
        'post3' => '03 - post n3',
      ],
      '15/02/2018' => [
        'post4' => '04 - post n4',
        'post5' => '05 - post n5',
        'post6' => '06 - post n6'
      ]
    ];

    foreach ($date as $data=>$posts) {
      echo $data;?> <br> <?php

      foreach ($posts as $post) {
        echo $post.'  ';
      }
      ?> <br> <?php
    }


    ?>

  </body>
</html>
