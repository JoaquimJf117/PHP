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
        function soma ($a, $b){
           return $a+$b;
        }

        $x = 3;
        $y = 8;
        $r = soma($x, $y);
        echo "A soma entre <span class='foco'>$x + $y = $r</span>";
    ?>
</body>
</html>