<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $dia = $_POST['dia'];

    switch($dia) {
        case "lunes":
            echo "DWES";
        break;

        case "martes":
            echo "DWEC";
        break;

        case "miercoles":
            echo "Libre config";
        break;

        case "jueves":
            echo "DAW";
        break;

        case "viernes":
            echo "DIW";
        break;

        case "sabado":
            echo "No hay clase";
        break;

        case "domingo":
            echo "No hay clase";
        break;

        default:
            echo "El dia introducido no es correcto.";
    }
    ?>
    <br><br>
    <a href="02-01.php">>> Volver</a>
</body>
</html>