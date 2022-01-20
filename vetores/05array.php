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
            $cad = array("nome" => "Joaquim",
                       "idade"=> 19,
                       "peso"=> 74.2);
            foreach ($cad as $k => $c){
                echo "O campo $k possui o conteúdo $c <br>";
            }
        ?>
    </pre>
</body>
</html>