<?php
include 'database.php';

//function getWordsFromCategory($categoryID)
//    {        
//        global $db;
//        
//        $getWordList = "SELECT * FROM words JOIN word_wc on words.words_id = word_wc.words_id WHERE wc_id = :categoryID";
//        $statement = $db->prepare($getWordList);
//        $statement->bindValue(':categoryID', $categoryID);        
//        $statement->execute();
//        $categories = $statement->fetch();
//        $statement->closeCursor();
//
//        return $categories;
//    }

function getCategories($difficulty)
{        
    global $db;

    $getCategories = "SELECT category_name FROM word_category WHERE difficulty = '$difficulty'";
    $result = pg_query($db, $getCategories);
    
    $arr = array();
    while($line = pg_fetch_array($result))
    {        
        array_push($arr, $line["category_name"]);
    }
        
    return $arr;        
}
////Start of Get words functions for Dictionary
function getWords()
{        
    global $db;
    
    $getWords = "SELECT * FROM words";
    $result = pg_query($db, $getWords);
    
    $arr = pg_fetch_all($result);
        
    return $arr;
}
function getWordsAlphabetically($language)
{
     global $db;
    
    $getWord = "SELECT $language FROM words ORDER ASC;";
    $result = pg_query($db, $getWord);
    
    $arr = array();
    while($line = pg_fetch_array($result))
    {        
        array_push($arr, $line[$language]); //This is hardcoded
    }
        
    return $arr;   
}
function getEightWords($topic, $language) {
    global $db;
    
    $getEight = "SELECT $language FROM words w INNER JOIN  word_wc wwc on w.words_id = wwc.words_id INNER JOIN word_category wc on wwc.wc_id = wc.wc_id WHERE wc.category_name = '$topic' ORDER BY RANDOM() LIMIT 8;";
    $result = pg_query($db, $getEight);
    
    $arr = array();
    while($line = pg_fetch_array($result))
    {        
        array_push($arr, $line[$language]); //This is hardcoded
    }
        
    return $arr;
}
function getEightPics($topic) {
    global $db;
    
    $getEight = "SELECT english FROM words w INNER JOIN  word_wc wwc on w.words_id = wwc.words_id INNER JOIN word_category wc on wwc.wc_id = wc.wc_id WHERE wc.category_name = '$topic' ORDER BY RANDOM() LIMIT 8;";
    $result = pg_query($db, $getEight);
    
    $arr = array();
    while($line = pg_fetch_array($result))
    {        
        array_push($arr, $line['english']);
    }
        
    return $arr;
}
function getTopicsByDiff($diff) {
    global $db;
    
    $getTopics = "select category_name from word_category where category_name = ($diff)";
    $result = pg_query($db, $getTopics);

    $arr = array();
    while($line = pg_fetch_array($result))
    {        
        array_push($arr, $line[$_SESSION['lang']]);
    }
        
    return $arr;
}
//Changing a word into another langauge
function languageChange($word, $language)
{
    global $db;
    
    $getEight = "SELECT $language FROM words WHERE english = '$word' OR french = '$word' OR german = '$word' OR irish = '$word' OR spanish = '$word'";
    $result = pg_query($db, $getEight);
    
    $line = pg_fetch_assoc($result);
    
    $value = $line[$language];
        
    return $value;
}
function profileName($id)
{
    global $db;
    
    $getUser = "SELECT name FROM users WHERE user_id = '$id' ";
    $result = pg_query($db, $getUser);
    
    $arr = array();
    while($line = pg_fetch_array($result))
    {        
        array_push($arr, $line['name']);
    }
        
    return $arr;
}
function getFirstWord($categoryName) {
    global $db;
    
    $getWord = "SELECT w.english FROM words w INNER JOIN  word_wc wwc on w.words_id = wwc.words_id INNER JOIN word_category wc on wwc.wc_id = wc.wc_id WHERE wc.category_name = '$categoryName' LIMIT 1;";
    $result = pg_query($db, $getWord);
    
    $line = pg_fetch_assoc($result);
    
    $value = $line['english'];
        
    return $value;
}
function getDifficultyByCategory($categoryName) {
    global $db;
    
    $getWord = "SELECT difficulty from word_category WHERE category_name = '$categoryName';";
    $result = pg_query($db, $getWord);
    
    $line = pg_fetch_assoc($result);
    
    $value = $line['difficulty'];
        
    return $value;
}
//For inserting name, email and password(Register)
function insertUser($name,$email,$password) 
{
    global $db;
    
    $insert = "INSERT INTO users (name, email, password) VALUES('$name','$email','$password');";
    $result = pg_query($db,$insert);
}
function checkUsername($name) 
{
    global $db;
    
    $getInfo = "select * from users where name = '$name';";
    $result = pg_query($db,$getInfo);
    
    $line = pg_fetch_assoc($result);
    
    if(!empty($line))
    {
        return FALSE;
    }
    return TRUE;
}
function checkEmail($email) 
{
    global $db;
    
    $getInfo = "select * from users where email = '$email';";
    $result = pg_query($db,$getInfo);
    
    $line = pg_fetch_assoc($result);
    
    if(!empty($line))
    {
        return FALSE;
    }
    return TRUE;
}
function getUserInfoByUsername($name) 
{
    global $db;
    
    $getInfo = "select * from users where name = '$name';";
    $result = pg_query($db,$getInfo);
    
    $line = pg_fetch_assoc($result);
    
    return $line;
}
function getImg($english){
    $result = pg_query("select picture from words where english = '$english'");
    
    $raw = pg_fetch_result($result, 'picture');
        
    return (pg_unescape_bytea($raw));
}









