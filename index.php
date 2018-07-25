<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Snack 1</h2>

    <?php
      $partite =[
          'partita1' => [
            'sq_casa'=> 'Milan',
            'sq_ospite'=> 'Samp',
            'goal_casa' => 0,
            'goal_ospite' => 0
          ],
          'partita2' => [
            'sq_casa'=> 'Juve',
            'sq_ospite'=> 'Genoa',
            'goal_casa' => 4,
            'goal_ospite' => 0
          ],
          'partita3' => [
            'sq_casa' => 'Roma',
            'sq_ospite' => 'Lazio',

          ]
        ];

        foreach ($partite as $partita){
          echo $partita['sq_casa'].'-'.$partita['sq_ospite'].' punteggio:'.$partita['goal_casa'].'-'.$partita['goal_ospite'];?><br>
      <?php

        if (($partita['goal_casa']===null) || ($partita['goal_ospite']===null)) {
          echo 'punteggio non disponibile';
        };
        };

      ?>

    <h2><a href="index2.php">Snack 2</a></h2>
    <h2><a href="index3.php">Snack 3</a></h2>
    <h2><a href="index4.php">Snack 4</a></h2>
    <h2><a href="index5.php">Snack 5</a></h2>
    <h2><a href="index6.php">Snack 6</a></h2>
    <h2><a href="index7.php">Snack 7</a></h2>
    <h2><a href="index8.php">Snack 8</a></h2>

  </body>
</html>
