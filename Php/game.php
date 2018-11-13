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
        
        <link href="../Src/Css/GameCss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="countdown">
            <div id="countdownText"></div>
        </div>
        
        <div id="finScreen"></div>
        <div id="timesUp" class="box bounce-4"></div>
        <div id="roundFin"></div>
        
        <div id="progressBarBox">
            <div id="progress" class="progress-bar-striped pro" role="progressbar" aria-valuenow="0" aria-valuemax="100"></div>
        </div>
        <div id="board"></div>
        <div id="round">Round 0</div>
    </body>
</html>
