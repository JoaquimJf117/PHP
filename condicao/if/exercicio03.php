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
		$n1 = $_GET["n1"];
		$n2 = $_GET["n2"];
		$m = ($n1 + $n2) /2;
		if ($m < 5){
		    $rec = "Você está REPROVADO!!";
        } elseif ($m <= 5 && $m < 7){
		    $rec = "Você está em RECUPERAÇÃO!!";
        } else{
		    $rec = "Você está APROVADO!!";
        }
		echo "Sua Média é: $m <br> Com essas notas $rec.";
   ?>
</body>
</html>