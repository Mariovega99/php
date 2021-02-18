<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>12</title>
</head>
<body>
    <?php
    if (!isset($_POST['n']))
    {
    ?>
        <p>Introduce un numero para la serie de Fibonacci:</p>
        <form action="12.php" method="post">
        <input type="number" name="n" autofocus>
        <input type="submit" value="Aceptar">
        </form>
    <?php
    }
    else
    {
        $i = 1;
        $f1 = 0;
        $f2 = 1;
        $n = $_POST['n'];
        if($n >= 1)
        {
            switch($n)
            {
                case 1:
                    echo "0";
                break;

                case 2:
                    echo "0 1 ";;
                break;

                default:
                echo "0 1 ";
                while($n > 2)
                {
                    $aux = $f1;
                    $f1 = $f2;
                    $f2 = $aux + $f2;
                    echo "$f2 ";
                    $n--;
                }
            }
        }
        else
        {
            echo "Introduzca un valor con sentido";
        }
        echo'<br><br>';
        echo'<a href="12.php">>> Volver</a>';
    }
    ?>
</body>
</html>