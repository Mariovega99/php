<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $h = $_POST['hora'];

    if ($h >= 6 && $h <= 12)
    {
        echo "Buenos dias";
    }
    else
    {
        if ($h >= 13 && $h <= 20)
        {
            echo "Buenas tardes";
        }
        else
        {
            if ($h >= 21 && $h <= 24)
            {
                echo "Buenas noches";
            }
            else
            {
                if ($h >= 1 && $h <= 5)
                {
                    echo "Buenas noches";
                }
                else
                {
                    echo "Hora incorrecta";
                }
            }
        }
    }
    ?>

    <br><br>
    <a href="02-01.php">>> Volver</a>
</body>
</html>