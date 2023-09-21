<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        //Suma
        $suma = $n1 + $n2;

        //Resta
        $resta = $n1 - $n2;

        //Multiplicacion
        $multiplicacion = $n1 * $n2;

        //Division
        $division = $n1 / $n2;
        $resto = $n1 % $n2;

        echo "La suma de los dos numeros es $suma <br>";
        echo "La resta de los dos numeros es $resta <br>";
        echo "La multiplicacion de los dos numeros es $multiplicacion <br>";
        echo "La division de los dos numeros es $division, y el resto es $resto";

    ?>
</body>
</html>