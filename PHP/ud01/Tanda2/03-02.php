<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $dia = $_POST['dia'];

    switch($dia) {
        case 1:
            echo "Lunes";
        break;

        case 2:
            echo "Martes";
        break;

        case 3:
            echo "Miercoles";
        break;

        case 4:
            echo "Jueves";
        break;

        case 5:
            echo "Viernes";
        break;

        case 6:
            echo "Sabado";
        break;

        case 7:
            echo "Domingo";
        break;

        default:
            echo "El numero introducido no es correcto (Del 1 al 7).";
    }
    ?>
    <br><br>
    <a href="03-01.php">>> Volver</a>
</body>
</html>