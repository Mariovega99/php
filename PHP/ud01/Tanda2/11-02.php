<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $hora = $_POST['hora'];
        $minuto = $_POST['minuto'];

        $horasRestantes = (23 - $hora) * 3600;
        $minutosRestantes = (60 - $minuto) * 60;
        $tiempoRestante = $horasRestantes + $minutosRestantes;

        echo "Quedan $tiempoRestante segundos para la media noche."
    ?>
    <br><br>
    <a href="11-01.php">>> Volver</a>
</body>
</html>