<?php
session_start();
require('../model/user_db.php');

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
if ($action == 'login'){
    //grabs value from Post "Email and Password" sets them to variables for use in the function
    $email = filter_input(INPUT_POST,'username');
    $password = filter_input(INPUT_POST,'password');
   //email and password are passed as parameters to login() and set to $user
    $user = login($email, $password);
   //var_dump($user);
    if($user == NULL){//checks to see if $user is NOT empty
        //if $user is empty redirect user back to the loginform.php page
        header("Location: ../loginform.php?errors=Missing login credentials.");
    } else{
       //If $user is not NULL then user information is set in the $_SESSION
        $_SESSION['Email'] = $user['Email'];
        $_SESSION['First_Name'] = $user['First_Name'];
        $_SESSION['Last_Name'] = $user['Last_Name'];
        $_SESSION['UserID'] = $user['UserID'];
       //user is redirected to index.php
        header('Location: ../index.php');
    }
}
