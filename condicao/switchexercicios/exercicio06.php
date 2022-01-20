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
        $prov = isset($_GET["prov"])?$_GET["prov"]:0;
        switch ($prov){
            case 1:
                echo "Você mora na <span class='foco'>Região Centro do País</span>";
                break;
            case 2:
                echo "Você mora na  <span class='foco'>Região Norte do País</span>";
                break;
            case 3:
                echo "Você mora na <span class='foco'>Região Sul do País</span>";
                break;
            case 4:
                echo "Você mora na <span class='foco'>Região Norte do País</span>";
                break;
            case 5:
                echo "Você mora na <span class='foco'>Região Sudoeste do País</span>";
                break;
            case 6:
                echo "Você mora na <span class='foco'>Região Leste do País</span>";
                break;
            case 7:
                echo "Você mora na <span class='foco'>Região Nordeste do País</span>";
                break;
            case 8:
                echo "Você mora na <span class='foco'>Região Sudoeste do País</span>";
                break;
            case 9:
                echo "Você mora na <span class='foco'>Região Suldeste do País</span>";
                break;
            case 10:
                echo "Você mora na <span class='foco'>Região Sul do País</span>";
                break;
            case 11:
                echo "Você mora na <span class='foco'>Região Suldoeste do País</span> que é a nossa <span class='foco'>Capital</span>";
                break;
            case 12:
                echo "Você mora na <span class='foco'>Região Sul do País</span>";
                break;
            case 13:
                echo "Você mora na <span class='foco'>Região Norte do País</span>";
                break;
            case 14:
                echo "Você mora na <span class='foco'>Região Norte do País</span>";
                break;
            case 15:
                echo "Você mora na <span class='foco'>Região Sul do País</span>";
                break;
            case 16:
                echo "Você mora na <span class='foco'>Região Leste do País</span>";
                break;
            case 17:
                echo "Você mora na <span class='foco'>Região Norte do País</span>";
                break;
            case 18:
                echo "Você mora na <span class='foco'>Região Norte do País</span>";
                break;
        }
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>
