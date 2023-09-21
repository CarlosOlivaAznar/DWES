<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];

        if($n1 > $n2 && $n1 > $n3){
            echo "1. = $n1<br>";
            if($n2 > $n3){
                echo "2. = $n2<br>";
                echo "3. = $n3<br>";
            } else {
                echo "2. = $n3<br>";
                echo "3. = $n2<br>";
            }
        } else {
            if($n2 > $n3){
                echo "1. = $n2<br>";
                if($n1 > $n3){
                    echo "2. = $n1<br>";
                    echo "3. = $n3<br>";
                } else {
                    echo "2. = $n3<br>";
                    echo "3. = $n1<br>";
                }
            } else {
                echo "1. = $n3<br>";
                echo "2. = $n2<br>";
                echo "3. = $n1<br>";
            }
        }
    ?>
    <br>
    <br>
    <a href="ejercicio4.html">volver al cuestionario</a>
</body>
</html>