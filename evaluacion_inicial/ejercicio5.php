<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        $num = rand(0,500);

        echo "$num <br>";

        if($num >= 400){
            echo "El numero aleatorio se encuentra en el rango [400,500]";
        } else if($num >= 300){
            echo "El numero aleatorio se encuentra en el rango [300,400]";
        } else if($num >= 200){
            echo "El numero aleatorio se encuentra en el rango [200,300]";
        } else if($num >= 100){
            echo "El numero aleatorio se encuentra en el rango [100,200]";
        } else if($num >= 0){
            echo "El numero aleatorio se encuentra en el rango [0,100]";
        }

    ?>
    <br>
    <br>
    <a href="ejercicio5.html">volver al cuestionario</a>
</body>
</html>