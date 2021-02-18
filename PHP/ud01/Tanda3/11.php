<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>11</title>
</head>
<body>
    <?php
    if (!isset($_POST['n']))
    {
    ?>
        <p> Introduce un numero:</p>
        <form action="11.php" method="post">
        <input type="number" name="n" autofocus>
        <input type="submit" value="Aceptar">
        </form>
    <?php
    }
    else
    {
        $n = $_POST['n'];
        echo "<table><tr><td>n</td><td>n<sup>2</sup></td><td>n<sup>3</sup></td></tr>";
        
        for($i = $n; $i < $n + 5; $i++)
        {
            echo "<tr><td>$i</td><td>", $i * $i, "</td><td>", $i *$i * $i, "</td></tr>";
        }
        echo "</table>";
        echo '<br><a href="11.php">>> Volver</a>';
    }
    ?>
</body>
</html>