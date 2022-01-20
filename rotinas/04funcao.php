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
        function teste(&$x){
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }

        //passagem por Referência &$x;
        //Passagem por Valor $a = 3;
        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>"
    ?>
</body>
</html>