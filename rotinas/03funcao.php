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
        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;

            for ($i=0; $i<$t; $i++){
                $s += $p[$i];
            }
            return $s;
           //$r = soma(3,4,8,1,2);
        }
        $r = soma(3,5,2, 8, 9, 4);
        echo "A soma dos  valores é <span class='foco'>$r</span>";
    ?>
</body>
</html>