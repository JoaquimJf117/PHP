<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo.css">
    <title>Curso de PHP - Curso em Video</title>
</head>
<body>
     <form method="get" action="02tabuada.php">
         <select name="num">
             <?php
                for ($c = 1; $c <= 10; $c++){
                echo "<option>$c</option>";
                }
             ?>
         </select>
         <input type="submit" class="botao" value="Tabuada">
     </form>

</body>
</html>
