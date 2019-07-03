<?php
require('database.php');
//get_user = returns all the users in the system
function get_users() {
   global $db;
   $query = 'SELECT First_Name, Last_Name, Email FROM Users';
   $statement = $db->prepare($query);
   $statement->execute();
   $users = $statement->fetchAll();
   $statement->closeCursor();
   return $users;
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



   ?>