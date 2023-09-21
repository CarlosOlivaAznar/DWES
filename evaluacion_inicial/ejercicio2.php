<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $radio = $_GET["radio"];
        $pi = PI();

        //Calcular longitud
        $longitud = 2 * $pi * $radio;

        //Calcular area
        $area = $pi * pow($radio, 2);

        echo "Longitud del circulo = $longitud <br>";
        echo "Area del circulo $area"
    ?>
</body>
</html>