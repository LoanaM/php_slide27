<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $roles = [
        'teachers' => [
          ['nome'=> 'Loana', 'età'=> '34'],
          ['nome'=> 'Sabrina', 'età'=> '30']
        ],
        'PM' => [
          ['nome'=> 'Paolo', 'età'=> '35'],
          ['nome'=> 'Marta', 'età'=> '28']
        ]
      ];



    ?>
    <div style="height:50px; background-color:grey; width:200px;">
      <?php
        foreach($roles['teachers'] as $teacher){
          echo $teacher['nome'].','.$teacher['età'].'  ';
        }
      ?>
    </div>
    <div style="height:50px; background-color:green; width:200px">
      <?php
        foreach($roles['PM'] as $pm){
          echo $pm['nome'].','.$pm['età'].'  ';
        }
      ?>
    </div>





  </body>
</html>
