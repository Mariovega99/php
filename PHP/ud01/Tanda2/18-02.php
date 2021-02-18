<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
    $n = $_POST['n'];

    if ($n < 0){
      $n = -$n;
    }

    if ($n < 10) {
      $digitos = 1;
    }

    if (($n >= 10) && ($n < 100)) {
      $digitos = 2;
    }

    if (($n >= 100) && ($n < 1000)) {
      $digitos = 3;
    }

    if (($n >= 1000) && ($n < 10000)) {
      $digitos = 4;
    }

    if ($n >= 10000){
      $digitos = 5;
    }

    echo "El numero tiene $digitos cifras.";
    ?>
    <br><br>
    <a href="18-01.php">>> Volver</a>
  </body>
</html>