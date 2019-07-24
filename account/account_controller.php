<?php

session_start();
require('../model/account_db.php');

if($action == 'create_account'){
  //grab variables sent to this action (create_account.php) valuse from the create account form   
    include('create_account.php');
} else {
    include('index.php');
}

?>