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
        $nome = "Fernandes";
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
        print ("Meu nome $novo é lindo!");
    ?>
</body>
</html>