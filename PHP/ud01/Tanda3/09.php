<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>09</title>
  </head>
  <body>
    <?php
    if(!isset($_POST['n']))
    {
        echo "Introduce un numero para decirte cuantos digitos tiene:";
        echo '<form action="09.php" method="post">';
        echo '<input type="number" name="n"><br>';
        echo '<input type="submit" value="Aceptar">';
        echo '</form>';
    }
    else
    {
        $n = $_POST['n'];
        $ns = "$n";
        echo "El numero $n tiene ", strlen($ns) , " cifras.";
    }
    ?>
  </body>
</html>