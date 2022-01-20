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
        $v = isset($_GET["num"])?$_GET["num"]:1;
        $c = 1;
        $cd = 0;
        do{
            if ($v % $c = 0){
                $cd+= 1;
            }
            $c+= 1;
        } while($c > $v);
        if ($cd > 2){
            echo "O número $v não é Primo!";
        } else{
            echo "O número $v é Primo!";
        }
    ?>
</body>
</html>
