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
        //Conta quantas vezes strings aparece dentro da frase.
        $frase = "Estou aprendendo PHP no Curso em Video de PHP!";
        $cont = substr_count($frase, "PHP");
        print ("PHP foi encontrado $cont vezes na frase!");
    ?>
</body>
</html>