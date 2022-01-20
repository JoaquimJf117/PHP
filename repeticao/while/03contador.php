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
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $inc = isset($_GET["inc"])?$_GET["inc"]:0;
        switch ($inc){
            case 1:
                $op1 = $n1;
                while ($op1 <= $n2) {
                    echo "$op1 ";
                    $op1 += 1;
                }
                $op1 = $n1;
                while ($op1 >= $n2){
                    echo "$op1 ";
                    $op1 -= 1;
                }
                break;
            case 2:
                $op2 = $n1;
                while ($op2 <= $n2) {
                    echo "$op2 ";
                    $op2 += 2;
                }
               $op2 = $n1;
                while ($op2 >= $n2){
                    echo "$op2 ";
                    $op2 -= 2;
                }
                break;
            case 3:
                $op3 = $n1;
                while ($op3 <= $n2) {
                    echo "$op3 ";
                    $op3 += 3;
                }
               $op3 = $n1;
                while ($op3 >= $n2){
                    echo "$op3 ";
                    $op3 -= 3;
                }
                break;
            case 4:
                $op4 = $n1;
                while ($op4 <= $n2) {
                    echo "$op4 ";
                    $op4 += 4;
                }
               $op4 = $n1;
                while ($op4 >= $n2){
                    echo "$op4 ";
                    $op4 -= 4;
                }
                break;
            case 5:
                $op5 = $n1;
                while ($op5 <= $n2) {
                    echo "$op5 ";
                    $op5 += 5;
                }
               $op5 = $n1;
                while ($op5 >= $n2){
                    echo "$op5 ";
                    $op5 -= 5;
                }
                break;
            case 6:
                $op6 = $n1;
                while ($op6 <= $n2) {
                    echo "$op6 ";
                    $op6 += 6;
                }
                $op6 = $n1;
                while ($op6 >= $n2){
                    echo "$op6 ";
                    $op6 -= 6;
                }
        }
    ?>
</body>
</html>
