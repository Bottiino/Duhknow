<?Php 
    $title = "Choose a language"
?>
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Duhknow</title>
        
        <script src="../Src/Js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="../Src/Js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="../Src/Css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../Src/Css/GameCss.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="../Src/Js/index.js" type="text/javascript"></script>
    </head>

    <body>
        <?Php include 'header.php'; ?>
        <div id="languageContainer" class="container-fluid">
            <form class="likeForm">
                <div class="row">                    
                    <div id='frenchLanguage' class="language col-md-12">
                        <p class="languageName">French</p></a>
                    </div>
                </div>
                <div class="row">
                    <div id='irishLanguage' class="language col-md-12">
                        <p class="languageName">Irish</p>
                    </div>
                </div>
                <div class="row">
                    <div id='germanLanguage' class="language col-md-12">
                        <p class="languageName">German</p>
                    </div>
                </div>
                <div class="row">
                    <div id='spanishLanguage' class=" language col-md-12">
                        <p class="languageName">Spanish</p>
                    </div>
                </div>
                <div class="row">
                    <div class="language col-md-12">
                        <p class="languageName">Blank</p>
                    </div>
                </div>
                <div class="row">
                    <div class="language col-md-12">
                        <p class="languageName">Blank</p>
                    </div>
                </div>
            </form>
            
        </div>               
    </body>
</html>