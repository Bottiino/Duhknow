<!DOCTYPE html>
<?php
    include("../Database/database.php");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../Src/Css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../Src/Js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../Src/Js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="../Src/Js/script.js" type="text/javascript"></script>
        <script src="../Src/Js/index.js" type="text/javascript"></script>
        <link href="../Src/Css/GameCss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="gameContainer">
            <div id="countdown">
                <div id="countdownText"></div>
            </div>

            <div id="finScreen" class='endScreen'></div>
            <div id="timesUp" class="endScreen box bounce-4"></div>
            <div id="roundFin" class='endScreen'></div>
            <button href="mainmenu.php" type="button" id="mainmenuButt" class="btn btn-lg btn-block active btn-success"></button>
            <button href="game.php" type="button" id='retryButt' class="btn btn-lg btn-block active btn-success"></button>

            <div id="progressBarBox">
                <div id="progress" class="progress-bar-striped pro" role="progressbar" aria-valuenow="0" aria-valuemax="100"></div>
            </div>
            <div id="board"></div>
            <div id="round"><a href="javascript:history.go(-1)"><- </a> Round 0</div>
        </div>
    </body>
</html>
