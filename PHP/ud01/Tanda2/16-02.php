<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
        $n = $_POST['n'];
        echo "La ultima cifra de $n es ", $n % 10;
    ?>
    <br><br>
    <a href="16-01.php">>> Volver</a>
  </body>
</html>