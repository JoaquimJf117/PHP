<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
	<title>Curso de PHP - Curso em Video</title>
</head>
<body>
   <?php
		$a = isset($_GET["ano"])?$_GET["ano"]:1900;
		$i = date("Y") - $a;
		echo "Você nasceu em $a e terás $i <br/>";
		if ($i >= 18){
		    $v = "Você já pode votar";
		    $d = "e também já podes Dirigir";
        } else{
		    $v = "Você não pode votar";
		    $d = "não podes Dirigir";
        }
		echo "Com essa idade $v e também $d.";
   ?>
</body>
</html>