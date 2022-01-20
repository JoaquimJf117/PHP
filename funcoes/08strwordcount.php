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
        $frase = "Eu vou Estudar PHP agora";
        $cont = str_word_count($frase, 2);
        print_r($cont);
    ?>
</body>
</html>