<?php 
require('database.php');

function create_account() {
    global $db;
    $query = 'INSERT INTO Account(Account_Name, Department, Primary_Contact, Phone_Number, Email, Password)
                VALUES (:account_name, :department, :primary_contact, :phone_number, email, password)';
                //var_dump($query);
    $statement = $db->prepare($query)
    $statement->bindParam(':account_name', $event_name);
    $statement->bindParam(':department', $department);
    $statement->bindParam('primary_contact', $primary_contact);
    $statement->bindParam('phone_number', $phone_number);
    $statement->bindParam('email', $email);
    $statement->bindParam('password', $password);
    $statement->execute();
    //Success will return 1 row if succesful and 0 if it fails
    return $statement->rowCount();
}

function get_account(){
    global $db;
    $query = '';
    $statement = $db->prepare($query);
    $statement->bindParam('', );
    $statement->execute();

}


?>