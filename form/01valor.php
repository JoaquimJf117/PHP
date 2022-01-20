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
		$valor = $_GET["v"];
		$rq = sqrt($valor);
		echo "A raiz de $valor é igual a ".number_format($rq,2);
   ?>
   <a href="01exercicio.html">Voltar</a>
</body>
</html>