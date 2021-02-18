<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $h = $_POST['h'];
        $t = 0;
        
        $t = sqrt((2 * $h) / 9.81);

        echo "El tiempo que tarda en caer son ", round($t, $precision= 2), "segundos.";
    ?>
    <br><br>
    <a href="06-01.php">>> Volver</a>
</body>
</html>