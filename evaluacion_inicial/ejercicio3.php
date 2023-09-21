<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];

        if($n1 >= 1 && $n1 <= 7){

            switch ($n1) {
                case 1:
                    echo "Lunes <br>";
                    echo "Es dia laborable";
                    break;
                case 2:
                    echo "Martes <br>";
                    echo "Es dia laborable";
                    break;
                case 3:
                    echo "Miercoles <br>";
                    echo "Es dia laborable";
                    break;
                case 4:
                    echo "Jueves <br>";
                    echo "Es dia laborable";
                    break;
                case 5:
                    echo "Viernes <br>";
                    echo "Es dia laborable";
                    break;
                case 6:
                    echo "Sabado <br>";
                    echo "Es dia Festivo";
                    break;
                case 7:
                    echo "Domingo <br>";
                    echo "Es dia Festivo";
                    break;
            }

        } else {
            echo "El numero debe estar entre el 1 y el 7";
        }
    ?>
    <br>
    <a href="ejercicio3.html">volver al cuestionario</a>
</body>
</html>