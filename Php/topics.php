<?Php 
    include '../Database/database.php';
    include '../Database/session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Src/Css/style.css">

        <style>
            body
            {
                background: #b8e994;
                transition: 0.3s all;
            }
            .med-col {
                background: #fad390;
                transition: 0.3s all;
            }
            .hard-col
            {
                background: #e66767; 
            }            
            
            
            #close3
            {
                color: #a29bfe;
            }
            .modal-content
            {
                margin-left: 35%;
                margin-right: auto;
                width: 40%;
                top: 10%;
                margin-bottom: 5%;
                margin-top: 5%;
            }
            .play
            {
                text-align: center;
                
            }
            .play button
            {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                outline: 0;
                background-color: white;
                border: 0;
                padding: 10px 15px;
                color: white;
                background-color: #a29bfe;
                border-radius: 3px;
                width: 250px;
                cursor: pointer;
                font-size: 30px;
                transition-duration: 0.25s;
            }
            .modal
            {
                background: #c7ecee;
            }
        </style>
    </head>
    <body >


        <div class="topics">

            <h2>Beginner</h2>
            <div class="easy">
                <button id="t1" class="btn" >topic1</button>
                <button id="t2" class="btn">topic2</button>
                <br>
                <button id="t3" class="btn" >topic3</button>
                <button id="t4" class="btn">topic4</button>
                <br>
            </div>
            <h2>Amateur</h2>
            <div class="med">
                <button id="t5" class="btn" >topic3</button>
                <button id="t6" class="btn">topic4</button>
                <br>
                <button id="t7" class="btn">topic5</button>
                <button id="t8" class="btn">topic6</button>
                <br>
            </div>
            <h2>Expert</h2>
            <div class="hard">
                <button id="t7" class="btn">topic7</button>
                <button id="t8" class="btn">topic8</button>
                <br>
                <button id="t9" class="btn">topic9</button>
                <button id="t10" class="btn">topic10</button>
                <br>
            </div>
        </div>
        <div id="topic-info" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="play">
                        <span class="close" id="close3">&times;</span>
                        <h1> Topic Name </h1>
                        <br>
                        <p>Highest score</p>
                        <br>
                        <p>Words Learned</p>
                        <br>
                        <button id="playbutt">Play</button>

                    </div>
                </div>                   
            </div>
        </div>

        <div class="bnavbar">
            <div class="navbutt">
                <a href="topics.php" id="home">Home</a>
                <a href="#profile">Profile</a>
                <a href="#dictionary">Dict</a>
                <a href="#leaderboards">Leaderboards</a>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script  src="../Src/Js/topic.js"></script>
    </body>
</html>
