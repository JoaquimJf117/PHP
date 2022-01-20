<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../estilo.css">
    <title>Document</title>
    <style>
        body{
            font-size: 20pt;
        }
    </style>
</head>
<body>
    <pre>
        <?php
            $n = range(1,10,2);
            $n[0] = "nome = Joaquim";
            $n[1] = "sobrenome = Fernandes";
            $n[2] = "idade = 19";
            $n[3] = "peso = 74.2";
            $n[4] = "altura = 1.88";
            $n[5] = "time de basket = Golden State Warrior";
            $n[6] = "jogador = Stephen Curry";
            $n[7] = "musica = Country Roads";
            print_r($n);
        ?>
    </pre>
</body>
</html>