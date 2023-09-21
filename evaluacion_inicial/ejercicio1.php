<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];

        //Comprobar si el numero es par

        if (($n1%2)===0){
            echo "El numero es par";
        } else {
            echo "El numero es impar";
        }
    ?>
</body>
</html>