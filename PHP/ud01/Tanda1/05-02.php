<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $ancho = $_POST['ancho'];
        $alto = $_POST['alto'];

        echo "El area del rectangulo es ";
        echo round($ancho*$alto, $precision = 2), " cm<sup>2</sup>.";
    ?>
</body>
</html>