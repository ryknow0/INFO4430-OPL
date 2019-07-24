<?php

session_start();
require('../model/account_db.php');

$action = filter_input(INPUT_POST, 'action');
var_dump($action);
echo "$action";
if ($action == NULL) {
    //If $action is NULL check get for 'action'
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
      $action = 'create_account';
    }
}

if($action == 'create_account'){
  //grab variables sent to this action (create_account.php) valuse from the create account form   
    include('create_account.php');
} else {
    include('index.php');
}

?>