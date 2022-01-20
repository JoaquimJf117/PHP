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
        $t = "Aqui temos um texto gigante pelo PHP que vai mostrar o funcionamento da função WordWrap. Aqui temos um texto gigante pelo PHP que vai mostrar o funcionamento da função WordWrap";
        $r = wordwrap($t, 5, "<br/>\n", false);
        echo $t;
    ?>
</body>
</html>