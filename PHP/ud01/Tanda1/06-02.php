<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $ancho = $_POST['ancho'];
        $alto = $_POST['alto'];

        echo "El area del triangulo es ";
        echo round($ancho*$alto/2, $precision = 2), " cm<sup>2</sup>.";
    ?>
    <br><br>
    <a href="06-01.php">>> Volver</a>
</body>
</html>