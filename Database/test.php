<?Php
include 'database.php';
include 'functions.php';

$function = $_POST["functionname"];
$first = $_POST["arguments"][0];
$second = $_POST["arguments"][1];

$result = array();

if($function === "getEightWords")
{
    $result = getEightWordsFrench($first, $second);
}
else if($function === "languageChange")
{
    $result = languageChange($first, $second);
}

echo json_encode($result);

?>