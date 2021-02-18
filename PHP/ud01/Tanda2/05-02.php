<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $x = 0;

        if ($a == 0) {
            echo "No tiene solucion";
        } else {
            $x = -$b / $a;
            echo "La solucion es $x.";
        }
    ?>
    <br><br>
    <a href="05-01.php">>> Volver</a>
</body>
</html>