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
        //Colocando o nome ao contrário, de trás pra frente.
        $nome = "joaquim fernandes";
        $letra = strrev($nome);
        echo "Seu nome é $letra";
    ?>
</body>
</html>