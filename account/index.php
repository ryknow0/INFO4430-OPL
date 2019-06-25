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

   $account_name = filter_input(INPUT_POST, 'account_name');
   $department = filter_input(INPUT_POST, 'department');
   $primary_contact = filter_input(INPUT_POST, 'primary_contact');
   $phone_number = filter_input(INPUT_POST, 'phone_number');
   $email = filter_input(INPUT_POST, 'email');
   $password = filter_input(INPUT_POST, 'password');
   $account_added = create_account($account_name, $department, $primary_contact, $phone_number, $email, $password);
   $message = '';
   //var_dump($account_name);
  
   if($account_added > 0) {
     $message = 'Account Added';
   }
   else{
     $message = "Error Adding Account";
   }
   include('account.php'};



?>