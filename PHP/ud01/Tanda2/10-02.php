<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];

    switch($mes)
    {
        case 1:
            if($dia < 20) {
                $signo = "capricornio";
            }
            else {
                $signo = "acuario";
            }
        break;

        case 2:
            if($dia < 19) {
                $signo = "acuario";
            }
            else {
                $signo = "piscis";
            }
        break;

        case 3:
            if($dia < 21) {
                $signo = "piscis";
            }
            else {
                $signo = "aries";
            }
        break;

        case 4:
            if($dia < 20) {
                $signo = "aries";
            }
            else {
                $signo = "tauro";
            }
        break;

        case 5:
            if($dia < 21) {
                $signo = "tauro";
            }
            else {
                $signo = "geminis";
            }
        break;

        case 6:
            if($dia < 21) {
                $signo = "geminis";
            }
            else {
                $signo = "cancer";
            }
        break;

        case 7:
            if($dia < 23) {
                $signo = "cancer";
            }
            else {
                $signo = "leo";
            }
        break;

        case 8:
            if($dia < 23) {
                $signo = "leo";
            }
            else {
                $signo = "virgo";
            }
        break;

        case 9:
            if($dia < 23) {
                $signo = "virgo";
            }
            else {
                $signo = "libra";
            }
        break;

        case 10:
            if($dia < 23) {
                $signo = "libra";
            }
            else {
                $signo = "escorpio";
            }
        break;

        case 11:
            if($dia < 22) {
                $signo = "escorpio";
            }
            else {
                $signo = "sagitario";
            }
        break;

        case 12:
            if($dia < 22) {
                $signo = "sagitario";
            }
            else {
                $signo = "capricornio";
            }
        break;
    }

    echo "Su signo zodiacal es $signo."
    ?>
    <br><br>
    <a href="10-01.php">>> Volver</a>
</body>
</html>