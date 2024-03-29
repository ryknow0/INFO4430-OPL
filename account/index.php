<?php 

/**
 * ACTION: Template
 * ACTION SOURCE:
 * PURPOSE:
 * SUCCESS RE-DIRECTION:
 * FAIL RE-DIRECTION:
 */
session_start();
require('../model/account_db.php');
//require('../model/user_db.php');


$action = filter_input(INPUT_POST, 'action');
//var_dump($action);

if ($action == NULL){
    //If $action is NULL check get for 'action'
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
      $action = 'create_account';
    }
}

if($action == 'create_account'){
  //grab variables sent to this action (create_account.php) valuse from the create account form   
  header('Location: ../account/create_account.php');
  
} else if($action == 'add_account'){
  //grab variables sent to this action (create_account.php) values from create account form 
  //Get account name info from account creation form
  $account_name = filter_input(INPUT_POST, 'account_name');
  $account_phone = filter_input(INPUT_POST, 'phone');

  //Get user input from acount creation form
  $admin_email = filter_input(INPUT_POST, 'email');
  $admin_department = filter_input(INPUT_POST, 'department');
  $admin_first_name = filter_input(INPUT_POST, 'first_name');
  $admin_last_name = filter_input(INPUT_POST, 'last_name');
  $accountID = filter_input(INPUT_POST, 'accountID');
  $admin_password = filter_input(INPUT_POST, 'password1');
  //Create Account
  //Call create account function from account_db.php
  $accountID = create_account($account_name, $account_phone);
  
  var_dump($accountID);
  //Get Account ID

  //Create Admin User
  //By Default the account first user has Admin credentials
  $permissions = "Admin"; //set default Permission
  $admin_user_added = add_primary_user($admin_email, $admin_first_name, $admin_last_name, $admin_department, $admin_password, $accountID, $permissions);
  var_dump($admin_user_added);
  $message ='';
  
  //Re-direct user to Account Dashboard root/index.php
  header('Location: ../index.php');
  //var_dump($account_created);
  //Display messages depending on success or failure
  //if($admin_user_added > 0){
  //  $message = "Account Created";
  //  header('Location: ../index.php');
  //}
  //else{
  //  $message = "Error Creating Account";

  //  header('Location: ../account/create_account.php');
  //}

//} else if($action == 'edit_account'){
//    $account = get_account_id($userID);
//    header('Location: ../account/edit_account.php');
//} else if ($action == 'delete_account'){
//    $account = get_account_id($userID);
//    header('Location: ../account/delete_account.php');

}
/**
 *
 *   //$account_primary_user = add_primary_user($accontID, $email, $first_name, $last_name, $password1)
 *       //returns account primary user
 *       $_SESSION['AccountID'] = $account['AccountID'];
 *       $_SESSION['AccountName'] = $account['AccountName'];
 *       $_SESSION['First_Name'] = $account['First_Name'];
 *
 *       $accountID = $_SESSION['AccountID'] = $account['AccountID'];
 *
 *   }
 *    //var_dump($_SESSION);
 *    //SELECT ROW_COUNT();
 *
 * }
 * else{
 *   header("Location: ../account/index.php?errors=Passwords do not match.");
 *   }
 *  //Create account first then add admin user to account
 *   $account = create_account($account_name, $phone);
 *  //$user = login($email, $password);
 *  //$account_added = create_account($account_name, $department, $primary_contact, $phone_number, $email, $password);
 * 
 *   $message = '';
 *   //var_dump($account_name);
 * 
 *  //Check that the account was created
 *  //then add admin user with the accountID added
 *   if($account_added > 0) {
 *     $message = 'Account Added';
 *     $  user = add_user($accountID, $first_name, $last_name, $phone, $email, $password, $department);
 *
 *      $_SESSION['AccountID'] = $accountID['AccountID'];
 *     $_SESSION['First_Name'] = $accountID['First_Name'];
 *     $_SESSION['Last_Name'] = $accountID['Last_Name'];
 *   header('Location: ../index.php');
 *   }
 *   else{
 *     $message = "Error Adding Account";
 *   }
 *   header('Location: ../index.php');
 **/ 

?>