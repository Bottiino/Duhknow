<?php
    session_start();
    
    $_SESSION['topic'];
    $_SESSION['topicUpper'];
    
    if(isset($_POST['lang']))
    {
        $_SESSION['Language'] = $_POST['lang'];
    }
?>