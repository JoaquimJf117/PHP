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
		$a = isset($_GET["ano"])?$_GET["ano"]:1900;
		$i = date("Y") - $a;
		echo "Você nasceu em $a e terás $i <br/>";
		if ($i < 16){
            $tipoVoto = "Não Vota";
        } elseif (($i > 16 && $i < 18) || ($i>65)){
            $tipoVoto = "Voto Opcional";
        } else{
            $tipoVoto = "Voto Obrigátorio";
        }
		echo "Para essa idade, $tipoVoto.";
   ?>
</body>
</html>