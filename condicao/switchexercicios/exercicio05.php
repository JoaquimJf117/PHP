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
        $d = isset($_GET["ds"])?$_GET["ds"]:0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai Estudar!";
                break;
            case 7:
            case 8:
                echo "Descanse, Pequeno Gafanhoto! ;)";
                break;
            default:
                echo "Dia da Semana Inválido";
        }
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>
