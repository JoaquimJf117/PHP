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
		$ano = $_GET["an"];
		$idade = 2021 - $ano;
		echo "<br/>Quem nasceu em $ano tem idade de $idade anos.";
		$tipo = ($idade >=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
		echo "<br/>E dessa forma seu voto é $tipo";
   ?>
</body>
</html>