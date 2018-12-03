<?Php
    include '../Database/database.php';
    include '../Database/functions.php';
    include '../Database/session.php';
    
    $title = "Topics";        
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
        <?Php
            include 'header.php';
        ?>    
        <div id="mainmenuContainer" class="container-fluid">
            <div id='topics'>
                <div id='beginner'>  
                    <div class="title">Beginner</div>
                    <div class="row">
                        <?php                
                            $beginnerTopics = getCategories("beginner");
                            foreach ($beginnerTopics as $topic) : 
                                $firstWord = getFirstWord($topic);                            
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="outerCircle">
                                <div class="topicCircle beginnerCircle" data-id="<?Php echo $topic; ?>" data-toggle="modal" data-target="#modalTopicSelected"><?Php echo $topic;?>
                                    <img class="circleImg" src="../tileImg/<?Php echo $firstWord; ?>.png" alt="<?Php echo $topic; ?>"/>
                                </div>
                            </div>
                            <div class="topicCircleTitle"><?Php echo ucfirst($topic); ?></div>
                        </div>

                        <?php endforeach; ?>                  
                    </div>
                </div>
                <div id='inter'>   
                    <div class="title">Intermediate</div>
                    <div class="row">
                        <?php                
                            $interTopics = getCategories("intermediate");
//                            for($i = 0; $i < $interTopics.length(); $i++){
//                                
//                            }
                            foreach ($interTopics as $topic) : 
                                $firstWord = getFirstWord($topic);
                        ?>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                            <div class="outerCircle">
                                <div class="topicCircle interCircle" data-id="<?Php echo $topic; ?>" data-toggle="modal" data-target="#modalTopicSelected"><?Php echo $topic;?>
                                    <img class="circleImg" src="../tileImg/<?Php echo $firstWord; ?>.png"/>
                                </div>
                            </div>
                            <div class="topicCircleTitle"><?Php echo ucfirst($topic); ?></div>
                        </div>
                        
                        <?php endforeach; ?>
                    </div>
                </div>
                <div id='adv'>
                    <div class="title">Advanced</div>
                    <div class="row">
                        <?php                
                            $advTopics = getCategories("advanced");
                            foreach ($advTopics as $topic) : 
                                $firstWord = getFirstWord($topic);
                        ?>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                            <div class="outerCircle">
                                <div class="topicCircle advCircle" data-id="<?Php echo $topic; ?>" data-toggle="modal" data-target="#modalTopicSelected"><?Php echo $topic;?>
                                    <img class="circleImg" src="../tileImg/<?Php echo $firstWord; ?>.png"/>
                                </div>
                            </div>
                            <div class="topicCircleTitle"><?Php echo ucfirst($topic); ?></div>
                        </div>

                        <?php endforeach; ?>                    
                    </div>   
                </div>
            </div>
        </div>   
        
        <?Php 
            include 'footer.php';
        ?>
        
        <div class="modal fade" id="modalTopicSelected" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body mx-3 text-center">
                    <div>
                        <?Php
                            $firstWord = getFirstWord($_SESSION['topic']);
                        ?>
                        <img class="modalTopicImg" src="../tileImg/<?Php echo $firstWord; ?>.png" alt="<?Php echo $_SESSION['topic']; ?>"/>
                    </div>
                    <div id="exp" class="md-form mb-5">
                        <?Php echo $_SESSION['topicUpper']; ?>
                    </div>                    
                    <div id="exp" class="md-form mb-2">
                        <?Php echo "45/250"; ?><i class="icon fas fa-star"></i>
                    </div>
                    
                    <div id="highestRound" class="md-form mb-1">
                        <?Php echo "25"; ?><i class="icon fas fa-bolt"></i>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button id="playTopic" class="
                      <?Php
                        $diff = getDifficultyByCategory($_SESSION['topic']);
                    ?> btn-block btn-success">Play</button>
                </div>
              </div>
            </div>
        </div>
    </body>
</html>
