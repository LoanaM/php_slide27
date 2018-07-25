<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $alunni = [
      ['nome'=>'Gigi','cognome'=>'Buffon','voti'=>[10,8,6,7,7,9]],
      ['nome'=>'Loana','cognome'=>'Mase','voti'=>[9,8,9,7,7,6]],
      ['nome'=>'Alessia','cognome'=>'Mosetti','voti'=>[5,4,6,7,7,5]],
      ['nome'=>'Marco','cognome'=>'Rossi','voti'=>[7,8,9,6,9,8]],
    ];



    foreach($alunni as $alunno){
      $medialunno = media($alunno['voti']);
      echo $alunno['nome'].' '.$alunno['cognome'].' M='.$medialunno.'--';
    };


    function media($array){
      $somma = 0;
      $long = count($array);
      for ($i=0;$i<$long;$i++){
        $somma = $somma + $array[$i];
      };
      return $somma/$long;
    };
    ?>
  </body>
</html>
