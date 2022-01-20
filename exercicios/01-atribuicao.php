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
		$preco = $_GET ["p"];
		echo "O preço do Produto é R$ " .number_format($preco,2,",",".");
		$preco += ($preco*10/100);
		echo "<br/>E o novo preço com 10% de desconto será R$ " . number_format($preco,2,",",".");
   ?>
</body>
</html>