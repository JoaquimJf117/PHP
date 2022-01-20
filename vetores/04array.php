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
            $v = array(3=> 5,
                       1=> 9,
                       0=> 8,
                       7=> 7);
            unset($v[0]); //essa linha serve pra eliminar um campo dentro do array.
            print_r($v);
        ?>
    </pre>
</body>
</html>