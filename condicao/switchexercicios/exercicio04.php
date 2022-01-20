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
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;
        switch ($o){
            case 1:
                $r = $n * 2; //Calcula o Dobro.
            break;
            case 2:
                $r = $n ^ 3; //Calcula o Cubo.
            break;
            case 3:
                $r = sqrt($n); // $n ^ (1/2). Calcula Raiz Quadrada.
        }
        echo "O resultado da operação solicitada foi <span class='foco'>$r</span> ";
    ?>
<a href="exercicio04.html" class="botao">Voltar</a>
</body>
</html>
