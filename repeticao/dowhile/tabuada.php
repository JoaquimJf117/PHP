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
       $tb = isset($_GET["tb"])?$_GET["tb"]:0;
       $$tb = "<h1>Mostrando a Tabuada de <span class='foco'>$$tb</span></h1>";
       echo $$tb;
       switch ($tb) {
           case 1:
           case 2:
           case 3:
           case 4:
           case 5:
           case 6:
           case 7:
           case 8:
           case 9:
           case 10:
           case 11:
           case 12:
               $tb = isset($_GET["tb"])?$_GET["tb"]:0;
               $c = 1;
               do {
                   $r = $tb * $c;
                   echo "$tb x $c = $r <br>";
                   $c = $c + 1;
               } while ($c <= 12);
       }
    ?><br>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>