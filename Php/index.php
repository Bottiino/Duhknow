<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../Src/Css/style.css">
      
    </head>

    <body>

        <div class="container">
            <img src="img/logo_placeholder.jpg" alt="Logo-placeholder" width="900" height="500" class="logo" >

            <div id ="logplay" class="form">
                <button id="startbutt">Start Game</button>
                <button id="loginbutt">Login/Register</button>
            </div>
            <div id="login" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close">&times;</span>
                        <h2>Log-in/Register</h2>
                    </div>
                    <div class="modal-body">
                        
                      
                    </div>                   
                </div>
            </div>
              <div id="start" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close" id="close2">&times;</span>
                        <h2>Select Languages</h2>
                    </div>
                    <div class="modal-body">
                        <div class="lang">
                        <p>I want To Learn....</p>
                        <button id="french">French</button>
                        <br>
                        <button id="irish">Irish</button>
                      </div>
                    </div>                   
                </div>
            </div>
        </div>
        <script  src="../Src/Js/index.js"></script>
    </body>

</html>
