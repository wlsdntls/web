<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo file_get_contents($_GET['id'].".txt");
     ?>
  </body>
</html>
