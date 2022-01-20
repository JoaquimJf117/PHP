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
           $s = $a + $b;
           echo "<span>A soma vale <span class='foco'>$s</span></p>";
        }
        soma(3,4);
        soma(8,2);
        $x = 9;
        $y = 15;
        soma($x, $y);
    ?>
</body>
</html>