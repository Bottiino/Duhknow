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
        $result = getEightPics($_SESSION['topic']);
    }
    else if($function == "getEightWords")
    {
        $first = $_SESSION['topic'];
        $second = $_SESSION['Language'];
        $result = getEightWords($first, $second);
    }
    else if($function == "languageChange")
    {

        $result = languageChange($_POST['arguments'][0], $_POST['arguments'][1]);
    }

    echo json_encode($result);
}
else if($_POST['modalTopic'])
{
    $_SESSION['topic'] = $_POST['modalTopic'][0];
    $_SESSION['topicUpper'] = $_POST['modalTopic'][1];  
}

?>