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
		$a = 3;
		$b = &$a; //Referência de Variáveis!!
		$b += 5;
		echo "A variável 'a' vale $a";
		echo "<br/>A variável 'b' vale $b";
   ?>
</body>
</html>