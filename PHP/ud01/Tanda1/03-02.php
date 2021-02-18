<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        echo $_POST['pesetas'], " pesetas son ";
        echo round($_POST['pesetas'] / 166.386, $precision = 2), "€.";
    ?>
</body>
</html>