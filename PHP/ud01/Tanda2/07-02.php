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

        echo "La nota media es: ", round($media, $precision = 2), ".";
    ?>
    <br><br>
    <a href="07-01.php">>> Volver</a>
</body>
</html>