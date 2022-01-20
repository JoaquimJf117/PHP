<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Curso de PHP - Curso em Video</title>
    <style>
        span.foco{
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php
        $v = isset($_GET["val"])?$_GET["val"]:0;
        echo "<h1>Calculando o Fatorial de <span class='foco'>$v</span></h1>";
        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c--;
        } while($c >= 1);
        echo "<h2><span class='foco'>$v! = $fat</span></h2>";
    ?>
    <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
</body>
</html>