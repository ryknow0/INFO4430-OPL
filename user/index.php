<?php
session_start();
require('../model/user_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
   $action = filter_input(INPUT_GET, 'action');
   if ($action == NULL) {
       $action = 'list_users';
   }
}
if ($action == 'list_users') {
   $users = get_users();
   include('user_list.php');
}
elseif($action == 'login'){  
   $email = filter_input(INPUT_POST,'Email');
   $password = filter_input(INPUT_POST,'Password');
   $user = login($email, $password);
   var_dump($user);
   if($user == NULL){
       header("Location: ../loginform.php?errors=Missing login credentials.");
   } else{
       $_SESSION['Email'] = $user['Email'];
       $_SESSION['First_Name'] = $user['First_Name'];
       $_SESSION['Last_Name'] = $user['Last_Name'];
       $_SESSION['UserID'] = $user['UserID'];
       header('Location: ../index.php');
   }
}
