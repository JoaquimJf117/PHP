<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Curso de PHP - Curso em Video</title>
</head>
<body>
    <?php
        $jog1 = isset($_GET["jog1"])?$_GET["jog1"]:0;
        $jog2 = isset($_GET["jog2"])?$_GET["jog2"]:0;
        switch ($jog1){
            case 1:
                echo "Joga nos <span class='foco'>LA Lakers</span> e já foi selecionado <span class='foco'>17th pro All Star Game</span>";
                break;
            case 2:
                echo "Joga nos <span class='foco'>Golden State Warriors</span> e já foi selecionado <span class='foco'>7th pro All Star Game</span>";
                break;
            case 3:
                echo "Joga nos <span class='foco'>Milwaukee Bucks</span> e já foi selecionado <span class='foco'>5th pro All Star Game</span>";
                break;
            case 4:
                echo "Joga nos <span class='foco'>Dallas Mavericks</span> e já foi selecionado <span class='foco'>2nd pro All Star Game</span>";
                break;
            case 5:
                echo "Joga nos <span class='foco'>Portland Trail Blazers</span> e já foi selecionado <span class='foco'>6th pro All Star Game</span>";
                break;
            case 6:
                echo "Joga nos <span class='foco'>Phoenix Suns</span> e já foi selecionado <span class='foco'>11th pro All Star Game</span>";
                break;
            case 7:
                echo "Joga nos <span class='foco'>LA Clippers</span> e já foi selecionado <span class='foco'>7th pro All Star Game</span>";
                break;
            case 8:
                echo "Joga nos <span class='foco'>Celtics Boston</span> e já foi selecionado <span class='foco'>1st pro All Star Game</span>";
                break;
            case 9:
                echo "Joga nos <span class='foco'>Indiana Parcers</span> e já foi selecionado <span class='foco'>2nd pro All Star Game</span>";
                break;
            case 10:
                echo "Joga nos <span class='foco'>Denver Nuggets</span> e já foi selecionado <span class='foco'>3rd pro All Star Game</span>";
                break;
            case 11:
                echo "Joga nos <span class='foco'>Utah Jazz</span> e já foi selecionado <span class='foco'>2nd pro All Star Game</span>";
        }
        switch ($jog2){
            case 1:
                echo "<br>Joga nos <span class='foco'>Brooklyn Nets</span> e já foi selecionado <span class='foco'>9th pro All Star Game</span>";
                break;
            case 2:
                echo "<br>Joga nos <span class='foco'>Brooklyn Nets</span> e já foi selecionado <span class='foco'>7th pro All Star Game</span>";
                break;
            case 3:
                echo "<br>Joga nos <span class='foco'>Boston Celtics</span> e já foi selecionado <span class='foco'>2nd pro All Star Game</span>";
                break;
            case 4:
                echo "<br>Joga nos <span class='foco'>Utah Jazz</span> e já foi selecionado <span class='foco'>2nd pro All Star Game</span>";
                break;
            case 5:
                echo "<br>Joga nos <span class='foco'>Washington Wizards</span> e já foi selecionado <span class='foco'>3rd pro All Star Game</span>";
                break;
            case 6:
                echo "<br>Joga nos <span class='foco'>LA Clippers</span> e já foi selecionado <span class='foco'>5th pro All Star Game</span>";
                break;
            case 7:
                echo "<br>Joga nos <span class='foco'>Orlando Magic</span> e já foi selecionado <span class='foco'>2nd pro All Star Game</span>";
                break;
            case 8:
                echo "<br>Joga nos <span class='foco'>New York Knicks</span> e já foi selecionado <span class='foco'>1st pro All Star Game</span>";
                break;
            case 9:
                echo "<br>Joga nos <span class='foco'>Utah Jazz</span> e já foi selecionado <span class='foco'>1st pro All Star Game</span>";
                break;
            case 10:
                echo "<br>Joga nos <span class='foco'>Chicago Bulls</span> e já foi selecionado <span class='foco'>1st pro All Star Game</span>";
                break;
            case 11:
                echo "<br>Joga nos <span class='foco'>New Orleans Pelicans</span> e já foi selecionado <span class='foco'>1st pro All Star Game</span>";
        }
    ?>
    <br><br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>
