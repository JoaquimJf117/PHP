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
        //stripos ignora se não houver a string em "n" ou "M".
        $frase = "Estou aprendendo PHP!";
        $pos = stripos($frase, "php");
        echo "$frase <br> A string foi encontrada na posição $pos";
    ?>
</body>
</html>