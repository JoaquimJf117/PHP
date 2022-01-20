<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Curso de PHP - Curso em Video</title>
</head>
<body>
    <?php
        for ($i = 1; $i <= 40; $i+=5){
            echo "$i ";
        }

        echo "<br>";

        for ($d = 30; $d >= 1; $d-=3){
            echo "$d ";
        }
        echo "<br>";
        for ($r = 0; $r <= 50; $r+=5){
            echo "$r ";
        }
        echo "<br>";
        for ($i = 45; $i >= 0; $i -=4){
            echo "$i ";
        }
    ?>
</body>
</html>