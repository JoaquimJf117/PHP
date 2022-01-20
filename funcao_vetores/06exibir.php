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
            $v = array(2=> "A", 5=> "J", 0=> "M", 3=> "X", 4=> "K");
            print_r($v);
            krsort($v);//krsort faz o inverso do ksort
            //arsort($v); versão reversa
            //asort($v); mexe todos os elementos até o seu indice.
            //sort($v); //Ordena e o rsort($v); Desordena
            //rsort($V);
            print_r($v);
        ?>
    </pre>
</body>
</html>