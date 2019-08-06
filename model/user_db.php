<?php
require('database.php');
//get_user = returns all the users in the system

function get_account_users($accountID) {
   global $db;
   $query = 'SELECT First_Name, Last_Name, Email 
               FROM Users 
               WHERE AccountID = :AccountID';
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $statement = $db->prepare($query);
   $statement->execute();
   $account_users = $statement->fetchAll();
   $statement->closeCursor();
   return $account_users;
}

/**
 * FUNCTION: login
 * PURPOSE:  gets userid for user with the matching username and password
 * PARAMETERS: $mail, $password
 * RETURN: Information of logged in user
 * NOTES: called from the user/index.php 
 */

function login($email, $password){
   global $db;
   //
   $query = 'SELECT UserID, First_Name, Last_Name, Email 
               FROM Users 
               WHERE Email = :Email AND Password = :Password';
   //db query gets passed to the prepare function
   $statement = $db->prepare($query);
   echo $email;
   echo $password;
   $statement->bindParam(':Email', $email);
   $statement->bindParam(':Password', $password);
   var_dump($statement);   
   //execute passes the statement (query) and sends it across the connection to the db sever       
   $statement->execute();
   // fetch is cursor runction
   $user = $statement->fetch(PDO::FETCH_BOTH);//access the return array allows you to use names or numbers to access array items
   $statement->closeCursor();
   //$user is an aray of 4 elements
   var_dump($user);
   return $user;   
}
//var_dump($_SESSION);
//Add User Function
function add_user($email, $first_name, $last_name, $department, $password, $accountID, $permissions){
      global $db;
      $query = 'INSERT INTO Users(AccountID_FK, Username, Password, First_Name, Last_Name, Department, Permissions)
                  VALUES (:AccountID, :Email, :Password, :First_Name, :Last_Name, :Department, :Permissions)';
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $statement = $db->prepare($query);
      $statement->bindParam(':Email', $email);
      $statement->bindParam(':First_Name', $first_name);
      $statement->bindParam(':Last_Name', $last_name);
      $statement->bindParam(':Department', $department);
      $statement->bindParam(':Password', $password);
      $statement->bindParam(':AccountID', $accountID);
      $statement->bindParam(':Permissions', $permissions);
      echo "User Add Function Account ID is: " . $accountID;
      $statement->execute();
      $last_id = $db->lastInsertId();
      echo "New record created succesfully. User ID is: " . $last_id;
      $statement->closeCursor();
      return $last_id;
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