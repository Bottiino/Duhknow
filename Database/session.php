<?php
    session_start();
    
    if(isset($_POST['lang']))
    {
        $_SESSION['Language'] = $_POST['lang'];
    }
    
    if(isset($_POST['topic']))
    {
        $_SESSION['topic'] = $_POST['topic'];
    }       
 
    $expireAfter = 900;
 
    if(isset($_SESSION['last_action']))
    {
        $secondsInactive = time() - $_SESSION['last_action'];


        if($secondsInactive >= $expireAfter)
        {
            session_unset();
            session_destroy();
        }    
    }
    $_SESSION['last_action'] = time();
?>