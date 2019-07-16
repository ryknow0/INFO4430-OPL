<?php 
session_start();
require('../model/account_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    //If $action is NULL check get for 'action'
   $action = filter_input(INPUT_GET, 'action');
   if ($action == NULL) {
       $action = 'login';
   }
}

if($action == 'create_account'){

  //take POST values submitted from ../account/index.php
  //and assign them to variables
   $account_name = filter_input(INPUT_POST, 'account_name');
   $department = filter_input(INPUT_POST, 'department');
   $first_name = filter_input(INPUT_POST, 'first_name');
   $last_name = filter_input(INPUT_POST, 'last_name');
   $phone = filter_input(INPUT_POST, 'phone');
   $email = filter_input(INPUT_POST, 'email');
   $password1 = filter_input(INPUT_POST, 'password1');
   $password2 = filter_input(INPUT_POST, 'password2');

   //This can be removed if we do the password validation on the /account/index.php
   if($password1 == $password2){
     $password == $password1; 
   }
   else{
    header("Location: ../account/index.php?errors=Passwords do not match.");
   }
   //Create account first then add admin user to account
   $account = create_account($account_name, $phone);
   //$user = login($email, $password);
   //$account_added = create_account($account_name, $department, $primary_contact, $phone_number, $email, $password);
   $message = '';
   //var_dump($account_name);
  
   //Check that the account was created
   //then add admin user with the accountID added
   if($account_added > 0) {
     $message = 'Account Added';
     $user = add_user($accountID, $first_name, $last_name, $phone, $email, $password, $department);

     $_SESSION['AccountID'] = $accountID['AccountID'];
     $_SESSION['First_Name'] = $accountID['First_Name'];
     $_SESSION['Last_Name'] = $accountID['Last_Name'];
     header('Location: ../index.php');
   }
   else{
     $message = "Error Adding Account";
   }
   header('Location: ../index.php');



?>