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
        $nome = "Gosto de Estudar Design! Design é muito Legal.";
        $nova = str_replace("Design", "Programação", $nome);
        print $nova;
    ?>
</body>
</html>