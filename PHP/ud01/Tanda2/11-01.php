<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 11 Tanda 2</title>
</head>
<body>
    Dime una hora y te dire cuantos segundos faltan para la media noche:<br>
    <form action="11-02.php" method="post">
        Introduce una hora:
        <input type="number" name="hora" min="0" max="24" autofocus><br>
        Introduce los minutos:
        <input type="number" name="minuto" min="0" max="59"><br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>