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
            //Matriz no PHP é chamado de array dentro de arrays...
            $m = array(array(6,4),
                       array(4,9),
                       array(3,2));
            $m[0][1] = $m [2][0];
            print_r($m);
        ?>
    </pre>
</body>
</html>