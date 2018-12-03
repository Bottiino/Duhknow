<?php 
    include 'database.php';
    include 'session.php';
    include 'functions.php';
    include_once 'validate.php';
    
    $form_errors = array();
    
    $username = check_input($_POST['username']);
    $email = check_input($_POST['email']);
    $password = check_input($_POST['password']);
       
    if(checkUsername($username) != TRUE)
    {
        die("success");
        array_push($form_errors, "Username is taken.");
    }
    if(checkEmail($email) != TRUE)
    {
        array_push($form_errors, "Email is taken.");
    }
    
    $required_fields = array('username', 'email', 'password');    
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
    
    $fields_to_check_length = array('username' => 6, 'password' => 8);    	
    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length)); 
    
    $form_errors = array_merge($form_errors, valid_password($password));
       
    if(empty($form_errors))
    {
        $password = password_hash($password, PASSWORD_DEFAULT);

        insertUser($username, $email, $password);

        $userInfo = getUserInfoByUsername($username);  
        $_SESSION['user_ID'] = $userInfo['user_id'];
    }
    
    $errors = implode("<br>", $form_errors);
    
    if ($errors !== '') {
        die($errors);
    }
    
    die("success");
?>