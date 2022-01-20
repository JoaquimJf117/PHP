<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritmetricas em PHP</title>
	<style>
		body{
			background: royalblue;
			color: white;
			font: normal 16pt Arial;
		}
	</style>
</head>
<body>
    <?php
		$v1 = $_GET ["x"];
		$v2 = $_GET ["y"];
		echo "<h2>Valores recebidos: $v1 e $v2</h2>"; 
		echo "<br/>O valor absoluto de $v2 é " .abs($v2); #valor Absoluto.
		echo "<br/>O valor de $v1 <sup>$v2</sup> é " .pow($v1, $v2); #valor elevado.
		echo "<br/>A raiz de $v1 é " .sqrt($v1); #raiz quadrada de um número.
		echo "<br/>O valor de $v2 arrendondado é " .round($v2); #valor arrendondado.//(ceil floor)
		echo "<br/>A parte inteira de $v2 é " .intval($v2);
		echo "<br/>O valor de $v1 em moeda é R$" .number_format($v1,2,",",".");
	?>
</body>
</html>