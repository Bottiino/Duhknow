<?Php
    include '../Database/database.php';
    include '../Database/functions.php';
    include '../Database/session.php';
    
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
    </head>

    <body>
        <div class="row">
            <div id="languageBar" class="col-md-12">
                <div>
                    <i class="fas fa-bars"></i>
                </div>
                <div>
                    <p>Choose your Language</p>
                </div>
                <div>
                    <i class="fas fa-ellipsis-v"></i>
                </div>
            </div>
        </div> 
        
        <div id="mainmenuContainer" class="container-fluid">
            <button type="button" class="link btn btn-link btn-block" data-toggle="modal" data-target="#modalTopicSelected">
                        Login
                </button>
            <div id='topics'>
                <div id='beginner'>
                <div class='diffTitle'>Beginner</div>
                <button class="topicCircle" data-toggle="modal" data-target="#modalTopicSelected"></button>
                
                                
                
                <div class='topicName'>Numbers</div>
                <div class="topicCircle"></div>
                <div class='topicName'>Animals</div>
                <div class="topicCircle"></div>
                <div class='topicName'>Food</div>
                <div class="topicCircle"></div>
                <div class='topicName'>Furniture</div>
                <div class="topicCircle"></div>
                <div class='topicName'>Blah</div>  
                </div>
            </div>
<!--            <div id='topics'>
                <div id='beginner'>                
                    <?php                
                        $beginnerTopics = getCategories("beginner");
                        foreach ($beginnerTopics as $topic) : 
                    ?>
                    <div class="topicCircle" value='<?Php echo $topic?>'>
                    </div>

                    <?php endforeach; ?>                    
                </div>
                <div id='inter'>                
                    <?php                
                        $interTopics = getCategories("intermediate");
                        foreach ($interTopics as $topic) : 
                    ?>
                    <div class="topicCircle" value='<?Php echo $topic?>'>
                    </div>

                    <?php endforeach; ?>                    
                </div>
                
            </div>-->
        </div>   
        
        <div class="modal fade" id="modalTopicSelected" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Sign In</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                    
                  <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="orangeForm-email" class="form-control validate" placeholder="Email">
                  </div>

                  <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control validate" placeholder="Password">
                  </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-deep-orange">Sign In</button>
                </div>
              </div>
            </div>
        </div>
    </body>
</html>