<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $a = 100;
      echo gettype($a);
      echo "<br />";
      echo settype($a, 'boolean');
      echo "<br />";
      echo gettype($a);
    ?>
  </body>
</html>
