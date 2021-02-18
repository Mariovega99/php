<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
        $n = $_POST['n'];

        if($n % 2) {
            echo "$n es impar";
        }
        else {
            echo "$n es par";
        }

        if($n % 5) {
            echo " y no es divisible entre 5.";
        }
        else {
            echo " y es divisible entre 5.";
        }
    ?>
    <br><br>
    <a href="14-01.php">>> Volver</a>
  </body>
</html>