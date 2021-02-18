<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>15</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['base']))
          {
            $base = 0;
            $exponente = 0;
            ?>
            Introduce una base(numero real) y un exponente(positivo) y te dire la potencia:
            <form action="15.php" method="post">
              Base: <input type="number" name="base" autofocus><br>
              Exponente: <input type="number" name="exponenteFinal">
              <input type="submit" value="Aceptar">
            </form>
          <?php
            }
            else
            {
                $base = $_POST['base'];
                $exponenteFinal = $_POST['exponenteFinal'];

                for($i = 0; $i <= $exponenteFinal; $i++)
                {
                    $potencia = 1;
                    $exponente = $i;

                    for($j = 0; $j < $exponente; $j++)
                    {
                        $potencia *= $base;
                    }
                    echo "$base<sup>$exponente</sup> = $potencia<br>";
                }
            }
         ?>
        <br>
        <a href="15.php">>> Volver</a>
  </body>
</html>