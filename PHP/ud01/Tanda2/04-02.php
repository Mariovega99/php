<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $h = $_POST['horas'];

    $salario = 0;
    
    if ($h < 40) 
    {
        $salario = $h * 12;
    }
    else
    {
        $salario = (40 * 12) + (($h - 40) * 16);
    }
    
    echo "El sueldo semanal es de $salario €"
    ?>

    <br><br>
    <a href="04-01.php">>> Volver</a>
</body>
</html>