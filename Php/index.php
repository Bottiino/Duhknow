<?php 
    include '../Database/database.php';
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
        <script src="../Src/Js/index.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="bg">
        <div id="indexContainer" class="container-fluid">
            <div class="row">
                    <div class="col-md-12">
                        <img id="logo" src="../Imgages/logo5.png" alt=""/>
                    </div>
            </div>
            <div id="indexStartButton" class="row">
                    <div class="col-md-12">
                        <a href="languageform.php">
                            <button id="indexStartButton" type="button" class="btn btn-lg btn-block active btn-success">
                                Start
                            </button>
                        </a>
                    </div>
            </div>
            <div class="row">
                    <div class="col-md-12">

                        <button type="button" class="link btn btn-link btn-block" data-toggle="modal" data-target="#modalLoginForm">
                                Login
                        </button>
                        
                        <button type="button" class="link btn btn-link btn-block" data-toggle="modal" data-target="#modalRegisterForm">
                                Register
                        </button>
                        
                    </div>
            </div>
        </div>
        
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Register</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <form id='regForm'>
                        <div class="modal-body mx-3"> 
                            <div class="md-form mb-5">
                              <i class="fa fa-envelope prefix grey-text"></i>
                              <input type="username" name='username' class="form-control validate" placeholder="Username">
                            </div>
                            <div class="md-form mb-5">
                              <i class="fa fa-envelope prefix grey-text"></i>
                              <input type="email" name='email' class="form-control validate" placeholder="Email">
                            </div>

                            <div class="md-form mb-4">
                              <i class="fa fa-lock prefix grey-text"></i>
                              <input type="password" name='password' class="form-control validate" placeholder="Password">
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                          <button type="submit" name="submit" class="btn btn-deep-orange">Register</button>
                        </div>
                      <div style="display: none;" class="errorMsg modal-footer d-flex justify-content-center"></div>
                      
                  </form>
              </div>
            </div>
        </div>
        </div>
    </body>
</html>
