<?Php
include 'database.php';
include 'session.php';
include 'functions.php';

if(isset($_POST["functionname"]))
{
    $function = $_POST["functionname"];

    $result = array();

    if($function == "getEightPics")
    {
        $result = getEightPics($_SESSION['topic']); //Session Problems
    }
    else if($function == "getEightWords")
    {
        $topic = $_SESSION['topic'];
        $lang = $_SESSION['lang'];
        $result = getEightWords($topic, $lang);
    }
    else if($function == "languageChange")
    {
        $result = languageChange($_POST['argument'][0], $_SESSION['lang']);
    }
    else if($function == "languageChangeEnglish")
    {
        $result = languageChange($_POST['argument'][0], "english");
    }
    else if($function == "wordLanguageChange")
    {
        $result = languageChange($_POST['argument'], $_SESSION['lang']);
    }
    else if($function == "getDiff"){
        $result = getDifficultyByCategory($_POST['topic']);
    }
    else if($function == "getDiffFromSession"){
        $result = getDifficultyByCategory($_SESSION['topic']);
    }
    else if($function == "setLang"){
        $_SESSION['lang'] = $_POST['lang'];
        $result =  $_POST['lang'];
    }

    echo json_encode($result);
}
else if($_POST['modalTopic'])
{
    $_SESSION['topic'] = $_POST['modalTopic'];
    die(getFirstWord($_POST['modalTopic']));  
}

?>
