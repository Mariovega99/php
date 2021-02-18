<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>14</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['base']))
          {
            $base = 0;
            $exponente = 0;
            ?>
            Introduce una base y un exponente y te dire la potencia:
            <form action="14.php" method="post">
              Base: <input type="number" name="base" autofocus><br>
              Exponente: <input type="number" name="exponente">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }
          else
          {
            $resultado = 1;
            $base = $_POST['base'];
            $exponente = $_POST['exponente'];

            if($exponente == 0)
            {
                $resultado = 1;
            }

            if($exponente > 0)
            {
                for($i = 0; $i < $exponente; $i++)
                {
                    $resultado *= $base;
                }
            }
            
            if($exponente < 0)
            {
                for($i = 0; $i < -$exponente; $i++)
                {
                    $resultado *= $base;
                }
                $resultado = 1 / $resultado;
            }
            echo "$base<sup>$exponente</sup> = $resultado";
          }
          ?>
          <br>
          <a href="14.php">>> Volver</a>
        <br>
  </body>
</html>