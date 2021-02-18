<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];
    $n3 = $_POST['numero3'];
    
    if ($n1 <= $n2 && $n1 <= $n3)
    {
        echo "$n1";

        if ($n2 <= $n3)
        {
            echo " - $n2 - $n3 ";
        }
        else
        {
            echo " - $n3 - $n2 ";
        }
        
    }
    elseif ($n2 <= $n1 && $n2 <= $n3)
        {
            echo "$n2";

            if ($n1 <= $n3)
            {
                echo " - $n1 - $n3 ";
            }
            else
            {
                echo " - $n3 - $n1 ";
            }
        }
        else
        {
            echo "$n3";

            if ($n1 <= $n2)
            {
                echo " - $n1 - $n2 ";
            }
            else
            {
                echo " - $n2 - $n1 ";
            }
        }

        //FORMA DE PACO
        //$a = $_POST['a'];
        //$b = $_POST['b'];
        //$c = $_POST['c'];

        // ordenación de los dos primeros números
        //if ($a < $b) {
        //$aux = $a;
        //$a = $b;
        //$b = $aux;
        //}

        // ordenación de los dos últimos números
        //if ($b < $c) {
        //$aux = $b;
        //$b = $c;
        //$c = $aux;
        //}

        // se vuelven a ordenar los dos primeros
        //if ($a < $b) {
        //$aux = $a;
        //$a = $b;
        //$b = $aux;
        //}

        //echo "Los números introducidos ordenados de menor a mayor son $a, $b y $c.";
    ?>
    <br><br>
    <a href="13-01.php">>> Volver</a>
</body>
</html>