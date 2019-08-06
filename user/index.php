<?php

/**
 * ACTION: Template
 * ACTION SOURCE:
 * PURPOSE:
 * SUCCESS RE-DIRECTION:
 * FAIL RE-DIRECTION:
 */
session_start();
require('../model/user_db.php');
require('../model/account_db.php');
require('../model/event_db.php');
var_dump($action);
echo "this is the action:" . $action;
//Conditions to magange the various actions related to users
//take 'action' from post and set to local $action variable
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    //If $action is NULL check get for 'action'
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'login';
    }
}

//Maybe add login function under the /user/index.php and user_db.php


//Gathers all items from the Session that are needed to add the user to generate the query
if ($action == 'user_dashboard'){
    $arrayAccountID = get_accountID($userID);
    $accountID = $arrayAccountID[0];
    $events = get_all_events($accountID);
    $json_events = json_encode($events);
    header('Location: ../index.php');
}else if($action == 'create_user'){
    header('Location: ../user/add_user.php');
}else if($action == 'add_user'){

    //Grab Account ID from current user
    $userID='5';

    //grabs value from Post "Email and Password" sets them to variables for use in the function
    $arrayAccountID = get_accountID($userID);
    var_dump($arrayAccountID);
    echo "<br>";
    $accountID = $arrayAccountID[0];
    var_dump($accountID);
    var_dump($userID);
    echo "This is the user ID:  ". $userID . "<br> ";
    echo "User Account ID is: " . $accountID;
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password1');
    $first_name = filter_input(INPUT_POST,'first_name');
    $last_name = filter_input(INPUT_POST,'last_name');
    $department = filter_input(INPUT_POST, 'department');
    //$permission = filter_input(INPUT_POST, 'permissions');
    $permissions = 'admin';
    //email and password are passed as parameters to login() and set to $user
    $user = add_user($email, $first_name, $last_name, $department, $password, $accountID, $permissions);
    var_dump($user);
    if($user == NULL){//checks to see if $user is NOT empty
        //if $user is empty redirect user back to the loginform.php page
        header("Location: ../user/add_user.php?errors=add_user Missing login credentials.");
    } else{
       //If $user is not NULL then user information is set in the $_SESSION
        //$_SESSION['Email'] = ;
        //$_SESSION['First_Name'] = $user['First_Name'];
        //$_SESSION['Last_Name'] = $user['Last_Name'];
        $_SESSION['UserID'] = $user;
        $_SESSION['AccountID'] = $accountID;
       //user is redirected to index.php
        header('Location: ../index.php');
    }
    
}else if ($action == 'login'){

 //grabs value from Post "Email and Password" sets them to variables for use in the function
    $email = filter_input(INPUT_POST,'username');
    var_dump($email);
    $password = filter_input(INPUT_POST,'password');
    var_dump($password);
    echo "this is the user:" . $email . "<br>";
    echo "this is the password:" . $password;
   //email and password are passed as parameters to login() and set to $user
    $user = login($email, $password);
    var_dump($user);
   //var_dump($user);
    if($user == NULL){//checks to see if $user is NOT empty
        //if $user is empty redirect user back to the loginform.php page
        //header("Location: ../loginform.php?errors=Login Missing login credentials.");
    } else{
       //If $user is not NULL then user information is set in the $_SESSION
        $_SESSION['Email'] = $user['Email'];
        $_SESSION['First_Name'] = $user['First_Name'];
        $_SESSION['Last_Name'] = $user['Last_Name'];
        $_SESSION['UserID'] = $user['UserID'];
        $_SESSION['AccountID'] = $user['AccountID'];
       //user is redirected to index.php
        header('Location: ../index.php');
    }
}
