<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Curso de PHP - Curso em Video</title>
</head>
<body>
    <?php
        $c = 1;
        while ($c <= 10){
            echo $c. "</br>";
            $c+= 1; //vai contar pra frente pulando uma casa apenas.
        }

        /*
        $c1 = 15;
        while ($c1 >= 1) {
            echo $c1. "<br>";
            $c1-= 2; // vai contar pra trás pulando duas casas.
        }
        */
    ?>
</body>
</html>