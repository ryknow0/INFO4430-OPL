<?php
require('database.php');
//get_user = returns all the users in the system
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

//Add User Function
function add_user(){
   global $db;
   $query = 'INSERT  First_Name, Last_Name, Email FROM Users';
   $statement = $db->prepare($query);
   $statement->bindParam(':', $email);
   $statement->bindParam(':', $)
   $statement->execute();
   $users = $statement->fetchAll();
   $statement->closeCursor();

   $user_query = 'INSERT INTO User(Email, First_Name, Last_Name, Department, Permissions, Password, AccountID)
   VALUES (:email, :first_name, :last_name, :department, :permissions, :password, $last_id)';
$statement = $db-prepare($user_query);
$statement->bindParam(':email', $email);
$statement->bindParam(':first_name', $first_name);
$statement->bindParam(':last_name', $last_name);
$statement->bindParam('primary_contact', $primary_contact);
$statement->bindParam(':department', $department);
$statement->bindParam(':account_id', $last_id);
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