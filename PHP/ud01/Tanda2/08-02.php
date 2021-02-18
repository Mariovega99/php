<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];

        $media = ($n1 + $n2 + $n3)/3;

        echo "La nota media es: ", round($media, $precision = 2), ". <br/>"; 

        if ($media >= 0 && $media <5)
        {
            echo "Insuficiente";
        }
        elseif ($media == 5)
        {
            echo "Suficiente";
        }
        elseif ($media == 6)
        {
            echo "Bien";
        }
        elseif ($media >= 7 && $media <= 8)
        {
            echo "Notable";
        }
        elseif ($media >= 9 && $media <= 10)
        {
            echo "Sobresaliente";
        }

    ?>
    <br><br>
    <a href="08-01.php">>> Volver</a>
</body>
</html>