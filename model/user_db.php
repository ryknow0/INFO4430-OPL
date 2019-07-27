<?php
require('database.php');
//get_user = returns all the users in the system

SELECT user_name(owner_sid) as 'Owner', state_desc, * 
from user_db.php

SELECT * from user_db.php
}



function get_account_users($accountID) {
   global $db;
   $query = 'SELECT First_Name, Last_Name, Email FROM Users WHERE AccountID = :AccountID';
   $statement = $db->prepare($query);
   $statement->execute();
   $account_users = $statement->fetchAll();
   $statement->closeCursor();
   return $account_users;
}
//login = gets userid for user with the matching username and password 
function login($email, $password){
   global $db;
   //
   $query = 'SELECT UserID, First_Name, Last_Name, Email FROM Users WHERE Email = :Email AND Password = :Password';
   //db query gets passed to the prepare function
   $statement = $db->prepare($query);

   $statement->bindParam(':Email', $email);
   $statement->bindParam(':Password', $password);   
   //execute passes the statement (query) and sends it across the connection to the db sever       
   $statement->execute();
   // fetch is cursor runction
   $user = $statement->fetch(PDO::FETCH_BOTH);//access the return array allows you to use names or numbers to access array items
   $statement->closeCursor();
   //$user is an aray of 4 elements
   //var_dump($user);
   return $user;   
}
//var_dump($_SESSION);
//Add User Function
function add_user($first_name, $last_name, $email, $department, $permissions, $password){
   //get account ID
   $accountID = $_SESSION['AccountID'];
   global $db;
   $query = 'INSERT INTO User(Email, First_Name, Last_Name, Department, Permissions, Password, AccountID)
   VALUES (:email, :first_name, :last_name, :department, :permissions, :password, :accountID)';
   $statement = $db->prepare($query);
   $statement->bindParam(':email', $email);
   $statement->bindParam(':first_name', $first_name);
   $statement->bindParam(':last_name', $last_name);
   $statement->bindParam('primary_contact', $primary_contact);
   $statement->bindParam(':department', $department);
   $statement->bindParam(':accountID', $accountID);
   $statement->execute();
   return $user;
}
//Delete User Function
function delete_user(){

   return $user;
}
//Update User
function update_user(){

   return $user;
}
   ?>