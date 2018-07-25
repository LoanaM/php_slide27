<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      if ( (strlen($_GET['name'])>3) && (strpos($_GET['mail'],'@')) &&(strpos($_GET['mail'],'.')) &&(is_numeric($_GET['age'])) )
      {
        echo 'accesso riuscito';
      }
      else {
        echo 'error:accesso negato';
      };
    ?>

  </body>
</html>
