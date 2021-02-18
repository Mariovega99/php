<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $x = $_POST['x'];
        $y = $_POST['y'];

        echo $x, " + ", $y, " = ", $x+$y, "<br>";
        echo $x, " - ", $y, " = ", $x-$y, "<br>";
        echo $x, " x ", $y, " = ", $x*$y, "<br>";
        echo $x, " / ", $y, " = ", $x/$y, "<br>";
    ?>
</body>
</html>